<?php

class ModuleCookieconsent extends Module {
	
	protected $strTemplate = 'mod_cookieconsent';

	public function generate() {
		if(TL_MODE == 'BE') {
			$objCookieconsent = \CookieconsentModel::findByPK($this->cookieconsent);
			$objT = new BackendTemplate('be_wildcard');
			$objT->wildcard = '### Cookieconsent ###';
			return($objT->parse());
		}
		
		return(parent::generate());
	}
	
	protected function compile() {

		$GLOBALS['TL_JAVASCRIPT'][] = 'bundles/jonnyspcookieconsent/cookieconsent.min.js';
		$GLOBALS['TL_CSS'][] = 		  'bundles/jonnyspcookieconsent/cookieconsent.min.css';

		$config = '';

		$cookieconsent = \CookieconsentModel::findByPK($this->cookieconsent);

		$settings['position']  = $cookieconsent->position;
		$settings['theme']  = $cookieconsent->theme;
		$settings['type']  = $cookieconsent->type;



		if($cookieconsent->palette == 'user'){

			//colors
			if($cookieconsent->popupbackground <> ''){
				$settings['palette']['popup']['background'] = '#'.$cookieconsent->popupbackground;
			}

			if($cookieconsent->popuptext <> ''){
				$settings['palette']['popup']['text'] = '#'.$cookieconsent->popuptext;
			}

			if($cookieconsent->buttonbackground <> ''){
				$settings['palette']['button']['background'] = '#'.$cookieconsent->buttonbackground;
			}

			if($cookieconsent->buttontext <> ''){
				$settings['palette']['button']['text'] = '#'.$cookieconsent->buttontext;
			}

			if($cookieconsent->buttonborder <> ''){
				$settings['palette']['button']['border'] = '#'.$cookieconsent->buttonborder;
			}


		}elseif($cookieconsent->palette == 'honeybee'){

			$settings['palette']['popup']['background'] = '#000';
			$settings['palette']['button']['background'] = '#f1d600';

		}elseif($cookieconsent->palette == 'blurple'){

			$settings['palette']['popup']['background'] = '#3937a3';
			$settings['palette']['button']['background'] = '#e62576';

		}elseif($cookieconsent->palette == 'mono'){

			$settings['palette']['popup']['background'] = '#237afc';
			$settings['palette']['button']['background'] = 'transparent';
			$settings['palette']['button']['border'] = '#fff';
			$settings['palette']['button']['text'] = '#fff';

		}elseif($cookieconsent->palette == 'nuclear'){

			$settings['palette']['popup']['background']= '#aa0000';
			$settings['palette']['popup']['text']= '#ffdddd';
			$settings['palette']['button']['background'] = '#ff0000';

		}elseif($cookieconsent->palette == 'cosmo'){

			$settings['palette']['popup']['background'] = '#383b75';
			$settings['palette']['button']['background'] = '#f1d600';

		}elseif($cookieconsent->palette == 'neon'){

			$settings['palette']['popup']['background'] = '#1d8a8a';
			$settings['palette']['button']['background'] = '#62ffaa';

		}elseif($cookieconsent->palette == 'corporate'){

			$settings['palette']['popup']['background']= '#edeff5';
			$settings['palette']['popup']['text']= '#838391';
			$settings['palette']['button']['background'] = '#4b81e8';

		}



		//content
		$settings['content']['message'] = $cookieconsent->contentmessage;
		$settings['content']['dismiss'] = $cookieconsent->contentdismiss;
		$settings['content']['allow'] = $cookieconsent->contentallow;
		$settings['content']['deny'] = $cookieconsent->contentdeny;

		$settings['showLink'] = boolval($cookieconsent->showLink);
		if($cookieconsent->showLink){
			$settings['content']['link'] = $cookieconsent->contentlink;
			$settings['content']['href'] = $cookieconsent->contenthref;
		}

		$settings['content']['close'] = $cookieconsent->contentclose;



		$settings['static']=boolval($cookieconsent->static);
		$settings['revokable']=boolval($cookieconsent->revokable);





		$config .= 'window.addEventListener("load", function(){	window.cookieconsent.initialise(';
		$config .= json_encode($settings);
		$config .= ')});';



//		$config .= '$("'.html_entity_decode($vegas->target).'").vegas(';
//			$slides['preload'] = boolval($vegas->preload);
//			$slides['timer'] = boolval($vegas->timer);
//			$slides['autoplay'] = boolval($vegas->autoplay);
//			$slides['delay'] = (int)$vegas->delay;
//			$slides['loop']=boolval($vegas->looop);
//			$slides['shuffle'] = boolval($vegas->shuffle);
//			$slides['transition'] = $vegas->transition;
//			$slides['animation'] = $vegas->animation;
//			$slides['align'] = $vegas->align;
//			$slides['valign'] = $vegas->valign;
//			$slides['cover'] = ($vegas->cover =='true' || $vegas->cover == 'false') ? boolval($vegas->cover) : $vegas->cover ;
//			$slides['transitionDuration'] = (is_numeric($vegas->transitionDuration)) ? intval($vegas->transitionDuration) : $vegas->transitionDuration;
//			$slides['animationDuration'] = (is_numeric($vegas->animationDuration)) ? intval($vegas->animationDuration) : $vegas->animationDuration;
//			
//			if($vegas->firstTransition <> ''){
//				$slides['firstTransition'] = (is_numeric($vegas->firstTransition)) ? intval($vegas->firstTransition) : $vegas->firstTransition;
//			}
//
//			if($vegas->firstTransitionDuration <> ''){
//				$slides['firstTransitionDuration'] = (is_numeric($vegas->firstTransitionDuration)) ? intval($vegas->firstTransitionDuration) : $vegas->firstTransitionDuration;
//			}
//
//			if($vegas->color <> ''){
//				$slides['color'] = '#'.$vegas->color;
//			}
//
//			if($vegas->overlay <> ''){
//				$slides['overlay']= \Environment::get('base').'bundles/jonnyspvegas/vegas/overlays/'.$vegas->overlay.'.png';
//			}
//
//			$images = \VegasSlidesModel::findBy(array('pid=?', 'published=?'),array($vegas->id, '1'),array('order'=>'sorting ASC'));
//			if (isset($images)){
//				foreach ($images as $key => $value) {
//
//					$slide['src'] = \Environment::get('base').\FilesModel::findByPk($value->src)->path;
//					$slide['align'] = $value->align;
//					$slide['valign'] = $value->valign;
//					if($value->transition <> ''){
//						$slide['transition'] = $value->transition;
//					}
//					if($value->animation <> ''){
//						$slide['animation'] = $value->animation;
//					}
//
//					$slides['slides'][] = $slide;
//					unset($slide);
//				}
//			}
//			$config .= json_encode($slides);
//			unset($slides);
//		
//		$config .='	);';
//
		$this->Template->cookieconsent = $config;

	}
}

