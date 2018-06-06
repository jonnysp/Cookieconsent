<?php

/**
 * Table tl_cookieconsent
 */
$GLOBALS['TL_DCA']['tl_cookieconsent'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'      => 'Table',
		'enableVersioning'   => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),
	

// List
	'list' => array
	(

 		'sorting' => array
		(
			'mode'                => 1,
			'fields'              => array('title'),
			'flag'        		  => 1,
			'panelLayout'         => 'sort,filter;search,limit'
		),
		
		'label' => array
		(
			'fields'                  => array('title'),
			'format'                  => '%s'
		),
		
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_cookieconsent']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.svg'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_cookieconsent']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.svg'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_cookieconsent']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.svg',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_cookieconsent']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.svg'
			),
			'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_cookieconsent']['toggle'],
				'icon'                => 'visible.svg',
				'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
				'button_callback'     => array('tl_cookieconsent', 'toggleIcon')
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'  => array('palette','showLink'),
		'default'       => '{title_legend},title,enabled,loadposition,type,layout,position,theme;{colors},palette;{content},contentmessage,contentdismiss,contentallow,contentdeny,contentclose;{link},showLink;{settings},revokable,animateRevokable,static,location,regionalLaw;{elements},revokeBtn,elementsheader,elementsmessage,elementsmessagelink,elementsdismiss,elementsallow,elementsdeny,elementslink,elementsclose;{compliance},complianceinfo,complianceoptin,complianceoptout;{layouts},layoutsbasic,layoutsbasicclose,layoutsbasicheader;{wrapper},window',
		'user'          => '{title_legend},title,enabled,loadposition,type,layout,position,theme;{colors},palette,popupbackground,popuptext,buttonbackground,buttontext,buttonborder;{content},contentmessage,contentdismiss,contentallow,contentdeny,contentclose;{link},showLink;{settings},revokable,animateRevokable,static,location,regionalLaw;{elements},revokeBtn,elementsheader,elementsmessage,elementsmessagelink,elementsdismiss,elementsallow,elementsdeny,elementslink,elementsclose;{compliance},complianceinfo,complianceoptin,complianceoptout;{compliance},layoutsbasic,layoutsbasicclose,layoutsbasicheader;{wrapper},window'
	
	),
  
  	// Subpalettes
    'subpalettes' => array (
        'showLink'      => 'contentlink,contenthref'
    ),


	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),

		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),

		'title' => array
		(
			'label'    				=> &$GLOBALS['TL_LANG']['tl_cookieconsent']['title'],
			'search'              	=> true,
			'inputType'          	=> 'text',
			'eval'                  => array('mandatory'=>true, 'maxlength'=>128, 'allowHtml'=>true,'preserveTags'=>true),
			'sql'            		=> "varchar(128) NOT NULL default ''"
		),

		'enabled' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['enabled'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),

		'loadposition' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['loadposition'],
			'default'				  => 'loadtop',
			'inputType'               => 'select',
			'options'            	  => array ('loadtop','loadbottom') ,
			'reference'               => &$GLOBALS['TL_LANG']['tl_cookieconsent'],
			'eval'                    => array('mandatory'=>true),
			'sql'                     => "varchar(128) NOT NULL default 'loadtop'"
		),

		'type' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['type'],
			'default'				  => 'info',
			'inputType'               => 'select',
			'options'            	  => array ('info','opt-out', 'opt-in') ,
			'reference'               => &$GLOBALS['TL_LANG']['tl_cookieconsent'],
			'eval'                    => array('mandatory'=>true),
			'sql'                     => "varchar(128) NOT NULL default 'info'"
		),

		'layout' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['layout'],
			'default'				  => 'basic',
			'inputType'               => 'select',
			'options'            	  => array ('basic','basic-close', 'basic-header') ,
			'reference'               => &$GLOBALS['TL_LANG']['tl_cookieconsent'],
			'eval'                    => array('mandatory'=>true),
			'sql'                     => "varchar(128) NOT NULL default 'basic'"
		),

		'position' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['position'],
			'default'				  => 'bottom',
			'inputType'               => 'select',
			'options'            	  => array ('top','top-left', 'top-right','bottom', 'bottom-left', 'bottom-right'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_cookieconsent'],
			'eval'                    => array('mandatory'=>true),
			'sql'                     => "varchar(128) NOT NULL default 'bottom'"
		),

		'theme' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['theme'],
			'default'				  => 'block',
			'inputType'               => 'select',
			'options'            	  => array ('block','edgeless','classic') ,
			'reference'               => &$GLOBALS['TL_LANG']['tl_cookieconsent'],
			'eval'                    => array('mandatory'=>true),
			'sql'                     => "varchar(128) NOT NULL default 'block'"
		),

		'palette' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['palette'],
			'default'				  => 'honeybee',
			'inputType'               => 'select',
			'options'            	  => array ('user','honeybee','blurple','mono','nuclear','cosmo','neon','corporate') ,
			'reference'               => &$GLOBALS['TL_LANG']['tl_cookieconsent'],
			'eval'      			  => array('includeBlankOption' => false,'submitOnChange' => true,'mandatory' => true),
			'sql'                     => "varchar(128) NOT NULL default 'honeybee'"
		),

		'popupbackground' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['popupbackground'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'size'=>1, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),

		'popuptext' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['popuptext'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'size'=>1, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),

		'popuplink' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['popuplink'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'size'=>1, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		
		'buttonbackground' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['buttonbackground'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'size'=>1, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),

		'buttontext' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['buttontext'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'size'=>1, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),

		'buttonborder' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['buttonborder'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'size'=>1, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		
		'contentmessage' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contentmessage'],
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true,'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),
		
		'contentdismiss' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contentdismiss'],
			'default'				  => 'Got it!',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		
		'contentallow' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contentallow'],
			'default'				  => 'Allow cookies',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		
		'contentdeny' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contentdeny'],
			'default'				  => 'Decline',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		
		'contentclose' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contentclose'],
			'default'				  => '&#x274c;',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>false, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),

		'showLink' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['showLink'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),

		'contentlink' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contentlink'],
			'default'				  => 'Learn more',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		
		'contenthref' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contenthref'],
			'default'				  => 'http://cookiesandyou.com',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),

		'static' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['static'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),

		'location' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['location'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),

		'regionalLaw' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['regionalLaw'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),

		'revokable' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['revokable'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),

		'animateRevokable' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['animateRevokable'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),

		'revokeBtn' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['revokeBtn'],
			'default'				  => '<div class="cc-revoke {{classes}}">Cookie Policy</div>',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'elementsheader' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsheader'],
			'default'				  => '<span class="cc-header">{{header}}</span>',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'elementsmessage' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsmessage'],
			'default'				  => '<span id="cookieconsent:desc" class="cc-message">{{message}}</span>',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'elementsmessagelink' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsmessagelink'],
			'default'				  => '<span id="cookieconsent:desc" class="cc-message">{{message}} <a aria-label="learn more about cookies" tabindex="0" class="cc-link" href="{{href}}" target="_blank">{{link}}</a></span>',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'elementsdismiss' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsdismiss'],
			'default'				  => '<a aria-label="dismiss cookie message" tabindex="0" class="cc-btn cc-dismiss">{{dismiss}}</a>',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'elementsallow' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsallow'],
			'default'				  => '<a aria-label="allow cookies" tabindex="0" class="cc-btn cc-allow">{{allow}}</a>',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'elementsdeny' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsdeny'],
			'default'				  => '<a aria-label="deny cookies" tabindex="0" class="cc-btn cc-deny">{{deny}}</a>',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'elementslink' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['elementslink'],
			'default'				  => '<a aria-label="learn more about cookies" tabindex="0" class="cc-link" href="{{href}}" target="_blank">{{link}}</a>',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'elementsclose' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsclose'],
			'default'				  => '<span aria-label="dismiss cookie message" tabindex="0" class="cc-close">{{close}}</span>',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'complianceinfo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['complianceinfo'],
			'default'				  => '<div class="cc-compliance">{{dismiss}}</div>',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'complianceoptin' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['complianceoptin'],
			'default'				  => '<div class="cc-compliance cc-highlight">{{dismiss}}{{allow}}</div>',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'complianceoptout' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['complianceoptout'],
			'default'				  => '<div class="cc-compliance cc-highlight">{{deny}}{{dismiss}}</div>',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'layoutsbasic' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['layoutsbasic'],
			'default'				  => '{{messagelink}}{{compliance}}',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'layoutsbasicclose' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['layoutsbasicclose'],
			'default'				  => '{{messagelink}}{{compliance}}{{close}}',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'layoutsbasicheader' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['layoutsbasicheader'],
			'default'				  => '{{header}}{{message}}{{link}}{{compliance}}',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		),

		'window' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['window'],
			'default'				  => '<div role="dialog" aria-label="cookieconsent" aria-describedby="cookieconsent:desc" class="cc-window {{classes}}">{{children}}</div>',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html'),
			'sql'                     => "mediumtext NULL"
		)

	)
);


class tl_cookieconsent extends Backend{

	public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
	{
		if (strlen(Input::get('tid')))
		{
			$this->toggleVisibility(Input::get('tid'), (Input::get('state') == 1), (@func_get_arg(12) ?: null));
			$this->redirect($this->getReferer());
		}

		$href .= '&amp;tid='.$row['id'].'&amp;state='.($row['enabled'] ? '' : 1);

		if (!$row['enabled'])
		{
			$icon = 'invisible.svg';
		}

		return '<a href="'.$this->addToUrl($href).'" title="'.StringUtil::specialchars($title).'"'.$attributes.'>'.Image::getHtml($icon, $label).'</a> ';
	}


	public function toggleVisibility($intId, $blnVisible, DataContainer $dc=null)
	{

		Input::setGet('id', $intId);
		Input::setGet('act', 'toggle');

		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_cookieconsent']['fields']['enabled']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_cookieconsent']['fields']['enabled']['save_callback'] as $callback)
			{
				if (is_array($callback))
				{
					$this->import($callback[0]);
					$blnVisible = $this->$callback[0]->$callback[1]($blnVisible, ($dc ?: $this));
				}
				elseif (is_callable($callback))
				{
					$blnVisible = $callback($blnVisible, ($dc ?: $this));
				}
			}
		}

		// Update the database
		$this->Database->prepare("UPDATE tl_cookieconsent SET tstamp=". time() .", enabled='" . ($blnVisible ? 1 : '') . "' WHERE id=?")->execute($intId);

	}

}