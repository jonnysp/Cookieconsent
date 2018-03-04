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
		'default'                     => '{title_legend},title,position,theme;{colors},popupbackground,popuptext,buttonbackground,buttontext,highlightbackground,highlighttext;{content},contentheader,contentmessage,contentdismiss,contentallow,contentdeny,contentlink,contenthref,contentclose;{settings},revokable;'
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
		'position' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['position'],
			'default'				  => 'bottom',
			'inputType'               => 'select',
			'options'            	  => array ('top','top-left', 'top-right','bottom', 'bottom-left', 'bottom-right') ,
			'eval'                    => array('mandatory'=>false, 'tl_class'=>'w100'),
			'sql'                     => "varchar(128) NOT NULL default 'bottom'"
		),
		'theme' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['theme'],
			'default'				  => 'block',
			'inputType'               => 'select',
			'options'            	  => array ('block','edgeless','classic') ,
			'eval'                    => array('mandatory'=>false, 'tl_class'=>'w100'),
			'sql'                     => "varchar(128) NOT NULL default 'block'"
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

		'highlightbackground' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['highlightbackground'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'size'=>1, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),

		'highlighttext' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['highlighttext'],
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>6, 'size'=>1, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),

		'revokable' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['revokable'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),

		'contentheader' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contentheader'],
			'default'				  => 'Cookies used on the website!',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w100'),
			'sql'                     => "varchar(255) NOT NULL default 'Cookies used on the website!'"
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
		
		'contentclose' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_cookieconsent']['contentclose'],
			'default'				  => '&#x274c;',
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>false, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default '&#x274c;'"
		)

	)
);


