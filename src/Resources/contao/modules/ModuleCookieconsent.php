<?php

class ModuleCookieconsent extends Module {
	
	protected $strTemplate = '';

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

		$script = '';

		$cookieconsent = \CookieconsentModel::findByPK($this->cookieconsent);

		$settings['position']  = $cookieconsent->position;
		$settings['theme']  = $cookieconsent->theme;
		$settings['type']  = $cookieconsent->type;
		$settings['layout']  = $cookieconsent->layout;
		$settings['enabled']  = boolval($cookieconsent->enabled);

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

		//other
		$settings['static']=boolval($cookieconsent->static);
		$settings['revokable']=boolval($cookieconsent->revokable);
		$settings['animateRevokable']=boolval($cookieconsent->animateRevokable);
		$settings['location']=boolval($cookieconsent->location);
		$settings['law']['regionalLaw']=boolval($cookieconsent->regionalLaw);


		//elements

		if($cookieconsent->revokeBtn <> ''){
			$settings['revokeBtn'] = $cookieconsent->revokeBtn;
		}

		if($cookieconsent->elementsheader <> ''){
			$settings['elements']['header'] = $cookieconsent->elementsheader;
		}

		if($cookieconsent->elementsmessage <> ''){
			$settings['elements']['message'] = $cookieconsent->elementsmessage;
		}

		if($cookieconsent->elementsmessagelink <> ''){
			$settings['elements']['messagelink'] = $cookieconsent->elementsmessagelink;
		}

		if($cookieconsent->elementsdismiss <> ''){
			$settings['elements']['dismiss'] = $cookieconsent->elementsdismiss;
		}

		if($cookieconsent->elementsallow <> ''){
			$settings['elements']['allow'] = $cookieconsent->elementsallow;
		}

		if($cookieconsent->elementsdeny <> ''){
			$settings['elements']['deny'] = $cookieconsent->elementsdeny;
		}

		if($cookieconsent->elementslink <> ''){
			$settings['elements']['link'] = $cookieconsent->elementslink;
		}

		if($cookieconsent->elementsclose <> ''){
			$settings['elements']['close'] = $cookieconsent->elementsclose;
		}

		//compliance
		if($cookieconsent->complianceinfo <> ''){
			$settings['compliance']['info'] = $cookieconsent->complianceinfo;
		}

		if($cookieconsent->complianceoptin <> ''){
			$settings['compliance']['opt-in'] = $cookieconsent->complianceoptin;
		}

		if($cookieconsent->complianceoptout <> ''){
			$settings['compliance']['opt-out'] = $cookieconsent->complianceoptout;
		}

		//layout
		if($cookieconsent->layoutsbasic <> ''){
			$settings['layouts']['basic'] = $cookieconsent->layoutsbasic;
		}

		if($cookieconsent->layoutsbasicclose <> ''){
			$settings['layouts']['basic-close'] = $cookieconsent->layoutsbasicclose;
		}

		if($cookieconsent->layoutsbasicheader <> ''){
			$settings['layouts']['basic-header'] = $cookieconsent->layoutsbasicheader;
		}

		//window
		if($cookieconsent->window <> ''){
			$settings['window'] = $cookieconsent->window;
		}

		$script .= '<script>window.addEventListener("load", function(){	window.cookieconsent.initialise(';
		$script .= json_encode($settings);
		$script .= ')});</script>';

		if($cookieconsent->loadposition == 'loadbottom'){
			$GLOBALS['TL_BODY'][] = $script; // script on bottom
		}else{
			$GLOBALS['TL_HEAD'][] = $script; // script on top
		}
		
	}
}

