<?php 

$GLOBALS['TL_DCA']['tl_module']['palettes']['cookieconsent'] = '{title_legend},name,cookieconsent,type;';

$GLOBALS['TL_DCA']['tl_module']['fields']['cookieconsent'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['cookieconsent'],
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_cookieconsent', 'getCookieconsent'),
	'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'submitOnChange'=>true,'tl_class'=>'w50'),
	'wizard' 				  => array(array('tl_module_cookieconsent', 'editCookieconsent')),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

class tl_module_cookieconsent extends Backend 
{

	public function getCookieconsent()
	{
		$objCookieconsent =  \CookieconsentModel::findAll();
		$arrCookieconsent = array();
		if(isset($objCookieconsent)){
			foreach ($objCookieconsent as $itemCookieconsent)
			{
				$arrCookieconsent[$itemCookieconsent->id] = '[ID ' . $itemCookieconsent->id . '] - '. $itemCookieconsent->title;
			}
		}

		return $arrCookieconsent;
	}

	public function editCookieconsent(DataContainer $dc)
	{
		$this->loadLanguageFile('tl_cookieconsent');
		return ($dc->value < 1) ? '' : ' <a href="contao/main.php?do=cookieconsent&amp;act=edit&amp;id=' . $dc->value . '&amp;popup=1&amp;nb=1&amp;rt=' . REQUEST_TOKEN . '" title="' . sprintf(StringUtil::specialchars($GLOBALS['TL_LANG']['tl_cookieconsent']['edit'][1]), $dc->value) . '" onclick="Backend.openModalIframe({\'title\':\'' . StringUtil::specialchars(str_replace("'", "\\'", sprintf($GLOBALS['TL_LANG']['tl_cookieconsent']['edit'][1], $dc->value))) . '\',\'url\':this.href});return false">' . Image::getHtml('alias.svg', $GLOBALS['TL_LANG']['tl_cookieconsent']['edit'][0]) . '</a>';
	}

}