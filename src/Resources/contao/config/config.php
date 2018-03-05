<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2018 Jonny Spitzner
 *
 * @license LGPL-3.0+
 */

array_insert($GLOBALS['BE_MOD']['content'], 100, array
(
	'cookieconsent'	=> array('tables' => array('tl_cookieconsent'))
));

array_insert($GLOBALS['FE_MOD'], 2, array
(
	'miscellaneous' => array
	(
		'cookieconsent'    => 'ModuleCookieconsent'
	)
));