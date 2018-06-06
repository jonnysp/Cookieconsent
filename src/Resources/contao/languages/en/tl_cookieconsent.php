<?php

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_cookieconsent']['new']    					= array('Neu', 'Ein neues Cookieconsent anlegen');
$GLOBALS['TL_LANG']['tl_cookieconsent']['edit']   					= array('Cookieconsent bearbeiten', 'Cookieconsent ID %s bearbeiten'); 
$GLOBALS['TL_LANG']['tl_cookieconsent']['copy']   					= array('Cookieconsent kopieren', 'Cookieconsent ID %s kopieren');
$GLOBALS['TL_LANG']['tl_cookieconsent']['delete'] 					= array('Cookieconsent löschen','Cookieconsent ID %s löschen');
$GLOBALS['TL_LANG']['tl_cookieconsent']['show']  					= array('Cookieconsent details', 'Details Cookieconsent ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_cookieconsent']['toggle']       			= array('AN/AUS', 'Cookieconsent ID %s Aktivieren/Deaktivieren');

/**
 * Fields
 */

$GLOBALS['TL_LANG']['tl_cookieconsent']['title']       				= array('Titel', 'Geben Sie hier den Titel ein.');
$GLOBALS['TL_LANG']['tl_cookieconsent']['enabled']       			= array('AN/AUS', '');
$GLOBALS['TL_LANG']['tl_cookieconsent']['loadposition']       		= array('Script Position', '');
$GLOBALS['TL_LANG']['tl_cookieconsent']['type'] 					= array('Typ', 'Wählen sie den Typ aus.');
$GLOBALS['TL_LANG']['tl_cookieconsent']['layout'] 					= array('Layout','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['position'] 				= array('Position','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['theme'] 					= array('Theme','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['palette'] 					= array('Farbpalette','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['popupbackground'] 			= array('Hintergrundfarbe','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['popuptext'] 				= array('Textfarbe','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['popuplink'] 				= array('Linkfarbe','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['buttonbackground'] 		= array('Knopf Hintergrundfarbe','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['buttontext'] 				= array('Knopf Textfarbe','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['buttonborder'] 			= array('Knopf Rahmenfarbe','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['contentmessage'] 			= array('Mitteilung','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['contentallow'] 			= array('','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['contentdeny'] 				= array('','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['contentclose'] 			= array('','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['showLink'] 				= array('Link anzeigen','Wird zum Deaktivieren der Verknüpfung in vorhandenen Layouts verwendet. Wenn false, wird das Element messagelink durch message ersetzt und der Inhalt des Links gelöscht.');
$GLOBALS['TL_LANG']['tl_cookieconsent']['contentlink'] 				= array('Linktext','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['contenthref'] 				= array('Linkziel','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['revokable'] 				= array('Widerruf','Wenn diese Option aktiviert ist, wird die Schaltfläche zum Zurückziehen jedes Mal angezeigt. Wenn false, wird die Schaltfläche "Widerruf" nur für erweiterte Konformitätsoptionen (Opt-In und Opt-Out) und in Ländern, die eine widerrufliche Zustimmung erfordern, angezeigt. Letzteres kann von regionalLaw deaktiviert werden.');
$GLOBALS['TL_LANG']['tl_cookieconsent']['animateRevokable'] 		= array('Widerruf animiert','Wenn dies der Fall ist, wird die widerrufbare Schaltfläche ein- und ausgeblendet. Standardmäßig für mobile Geräte deaktiviert.');
$GLOBALS['TL_LANG']['tl_cookieconsent']['static'] 					= array('Position fixed','Das Popup verwendet die Position fixed, um trotz Scroll-Balken an einer Stelle auf dem Bildschirm zu bleiben. Diese Option macht die Popup-Position statisch, so dass sie oben auf der Seite angezeigt wird. Eine Höhenanimation wurde ebenfalls standardmäßig hinzugefügt, so dass das Popup die Seite nicht zum Springen bringt, sondern allmählich wächst und eingeblendet wird.');
$GLOBALS['TL_LANG']['tl_cookieconsent']['location'] 				= array('Standortdienste','Um die grundlegenden Standortdienste zu aktivieren.');
$GLOBALS['TL_LANG']['tl_cookieconsent']['regionalLaw'] 				= array('Regionales Cookie-Gesetz','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['revokeBtn'] 				= array('Wiederruf Button Template','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsheader'] 			= array('Header Template','{{header}}');
$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsmessage'] 			= array('Message Template','{{message}}');
$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsmessagelink'] 		= array('Message & Link Template','{{messagelink}}');
$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsdismiss'] 			= array('Dismiss Button Template','{{dismiss}}');
$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsallow'] 			= array('Allow Button Template','{{allow}}');
$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsdeny'] 			= array('Deny Button Template','{{deny}}');
$GLOBALS['TL_LANG']['tl_cookieconsent']['elementslink'] 			= array('Link Template','{{link}}');
$GLOBALS['TL_LANG']['tl_cookieconsent']['elementsclose'] 			= array('Close Template','{{close}}');
$GLOBALS['TL_LANG']['tl_cookieconsent']['complianceinfo'] 			= array('Info Template','{{compliance}} Auswahl erfolgt über Typ.');
$GLOBALS['TL_LANG']['tl_cookieconsent']['complianceoptin'] 			= array('Opt-In Template','{{compliance}} Auswahl erfolgt über Typ.');
$GLOBALS['TL_LANG']['tl_cookieconsent']['complianceoptout'] 		= array('Opt-Out Template','{{compliance}} Auswahl erfolgt über Typ.');
$GLOBALS['TL_LANG']['tl_cookieconsent']['layoutsbasic'] 			= array('Layout Basic Template','Auswahl erfolgt über Layout.');
$GLOBALS['TL_LANG']['tl_cookieconsent']['layoutsbasicclose'] 		= array('Layout Basic Close Template','Auswahl erfolgt über Layout.');
$GLOBALS['TL_LANG']['tl_cookieconsent']['layoutsbasicheader'] 		= array('Layout Basic Header Template','Auswahl erfolgt über Layout.');
$GLOBALS['TL_LANG']['tl_cookieconsent']['window'] 					= array('Template','');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_cookieconsent']['title_legend'] 			= 'Grundeinstellungen';
$GLOBALS['TL_LANG']['tl_cookieconsent']['colors'] 					= 'Farbeinstellungen';
$GLOBALS['TL_LANG']['tl_cookieconsent']['content'] 					= 'Inhalte';
$GLOBALS['TL_LANG']['tl_cookieconsent']['settings'] 				= 'Sonstiges';
$GLOBALS['TL_LANG']['tl_cookieconsent']['elements'] 				= 'Element Templates';
$GLOBALS['TL_LANG']['tl_cookieconsent']['compliance'] 				= 'Button Templates';
$GLOBALS['TL_LANG']['tl_cookieconsent']['layouts'] 					= 'Layout Templates';
$GLOBALS['TL_LANG']['tl_cookieconsent']['wrapper'] 					= 'Wrapper Template';
$GLOBALS['TL_LANG']['tl_cookieconsent']['link'] 					= 'Link';

/**
 * Options
 */
$GLOBALS['TL_LANG']['tl_cookieconsent']['loadtop'] 					= array('Am Anfang der Webseite','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['loadbottom'] 				= array('Am Ende der Webseite','');

$GLOBALS['TL_LANG']['tl_cookieconsent']['info'] 					= array('Info','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['opt-out'] 					= array('Opt-Out','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['opt-in'] 					= array('Opt-In','');

$GLOBALS['TL_LANG']['tl_cookieconsent']['top'] 						= array('Oben','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['top-left'] 				= array('Oben Links','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['top-right'] 				= array('Oben Rechts','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['bottom'] 					= array('Unten','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['bottom-left'] 				= array('Unten Links','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['bottom-right'] 			= array('Unten Rechts','');

$GLOBALS['TL_LANG']['tl_cookieconsent']['basic'] 					= array('Basic','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['basic-close'] 				= array('Basic Close','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['basic-header'] 			= array('Basic Header','');

$GLOBALS['TL_LANG']['tl_cookieconsent']['block'] 					= array('Block','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['edgeless'] 				= array('Edgeless','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['classic'] 					= array('Classic','');

$GLOBALS['TL_LANG']['tl_cookieconsent']['user'] 					= array('Benutzerdefiniert','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['honeybee'] 				= array('Honeybee','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['blurple'] 					= array('Blurple','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['mono'] 					= array('Mono','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['nuclear'] 					= array('Nuclear','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['cosmo'] 					= array('Cosmo','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['neon'] 					= array('Neon','');
$GLOBALS['TL_LANG']['tl_cookieconsent']['corporate'] 				= array('Corporate','');
