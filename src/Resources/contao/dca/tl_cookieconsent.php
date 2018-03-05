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
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'  => array('palette','showLink'),
		'default'       => '{title_legend},title,type,position,theme;{colors},palette;{content},contentmessage,contentdismiss,contentallow,contentdeny,contentclose;{link},showLink;{settings},revokable,static;',
		'user'          => '{title_legend},title,type,position,theme;{colors},palette,popupbackground,popuptext,buttonbackground,buttontext,buttonborder;{content},contentmessage,contentdismiss,contentallow,contentdeny,contentclose;{link},showLink;{settings},revokable,static;'
	
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
			'eval'                  => array('mandatory'=>true, 'maxlength'=>128, 'tl_class'=>'w100','allowHtml'=>true,'preserveTags'=>true),
			'sql'            		=> "varchar(128) NOT NULL default ''"
		),

		'type' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['type'],
			'default'				  => 'info',
			'inputType'               => 'select',
			'options'            	  => array ('info','opt-out', 'opt-in') ,
			'reference'               => &$GLOBALS['TL_LANG']['tl_cookieconsent'],
			'eval'                    => array('mandatory'=>false, 'tl_class'=>'w100'),
			'sql'                     => "varchar(128) NOT NULL default 'info'"
		),

		'position' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['position'],
			'default'				  => 'bottom',
			'inputType'               => 'select',
			'options'            	  => array ('top','top-left', 'top-right','bottom', 'bottom-left', 'bottom-right') ,
			'reference'               => &$GLOBALS['TL_LANG']['tl_cookieconsent'],
			'eval'                    => array('mandatory'=>false, 'tl_class'=>'w100'),
			'sql'                     => "varchar(128) NOT NULL default 'bottom'"
		),
		'theme' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['theme'],
			'default'				  => 'block',
			'inputType'               => 'select',
			'options'            	  => array ('block','edgeless','classic') ,
			'reference'               => &$GLOBALS['TL_LANG']['tl_cookieconsent'],
			'eval'                    => array('mandatory'=>false, 'tl_class'=>'w100'),
			'sql'                     => "varchar(128) NOT NULL default 'block'"
		),

		'palette' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['palette'],
			'default'				  => 'honeybee',
			'inputType'               => 'select',
			'options'            	  => array ('user','honeybee','blurple','mono','nuclear','cosmo','neon','corporate') ,
			'reference'               => &$GLOBALS['TL_LANG']['tl_cookieconsent'],
			'eval'      			  => array('includeBlankOption' => false,'submitOnChange' => true,'mandatory' => true,'tl_class'=> 'w100'),
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
			'default'				  => 'This website uses cookies to ensure you get the best experience on our website.',
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true, 'style'=>'height:120px'),
			'sql'                     => "text NULL"
		),
		
		'contentdismiss' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contentdismiss'],
			'default'				  => 'Got it!',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default 'Got it!'"
		),
		
		'contentallow' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contentallow'],
			'default'				  => 'Allow cookies',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default 'Allow cookies'"
		),
		
		'contentdeny' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contentdeny'],
			'default'				  => 'Decline',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default 'Decline'"
		),
		
		'contentclose' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contentclose'],
			'default'				  => '&#x274c;',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>false, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default '&#x274c;'"
		),

		'showLink' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['showLink'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true,'tl_class'=>'w100'),
			'sql'                     => "char(1) NOT NULL default ''"
		),

		'contentlink' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contentlink'],
			'default'				  => 'Learn more',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default 'Learn more'"
		),
		
		'contenthref' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contenthref'],
			'default'				  => 'http://cookiesandyou.com',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default 'http://cookiesandyou.com'"
		),

		'revokable' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['revokable'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),

		'static' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['static'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		)
	)
);


