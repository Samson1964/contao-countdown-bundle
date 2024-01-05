<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   countdown
 * Version    1.0.0
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2013
 */

namespace Schachbulle\ContaoCountdownBundle\ContentElements;

class Countdown extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_countdown';

	/**
	 * Generate the module
	 */
	protected function compile()
	{

		// Parameter zuweisen
		//$csv = $this->countdown_csv;
		//$file = $this->countdown_file;
		//$namendrehen = $this->countdown_namendrehen;
		//$lightbox = $this->countdown_lightbox;
		//$linktext = $this->countdown_linktext;
		//$flagge = $this->countdown_flaggen;

		\System::loadLanguageFile('tl_content');
 		// Template ausgeben
		$this->Template->countdown_finish = date('F j Y G:i:s', $this->countdown_finish);
		$this->Template->countdown_days = $GLOBALS['TL_LANG']['tl_content']['countdown_days'] ? $GLOBALS['TL_LANG']['tl_content']['countdown_days'] : 'Tage';
		$this->Template->countdown_hours = $GLOBALS['TL_LANG']['tl_content']['countdown_hours'] ? $GLOBALS['TL_LANG']['tl_content']['countdown_hours'] : 'Stunden';
		$this->Template->countdown_minutes = $GLOBALS['TL_LANG']['tl_content']['countdown_minutes'] ? $GLOBALS['TL_LANG']['tl_content']['countdown_minutes'] : 'Minuten';
		$this->Template->countdown_seconds = $GLOBALS['TL_LANG']['tl_content']['countdown_seconds'] ? $GLOBALS['TL_LANG']['tl_content']['countdown_seconds'] : 'Sekunden';
		$this->Template->countdown_css = $this->countdown_style ? 'clockdiv_'.$this->countdown_style : 'clockdiv';

		return;

	}
}
