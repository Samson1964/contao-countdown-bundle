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
		$csv = $this->countdown_csv;
		$file = $this->countdown_file;
		$namendrehen = $this->countdown_namendrehen;
		$lightbox = $this->countdown_lightbox;
		$linktext = $this->countdown_linktext;
		$flagge = $this->countdown_flaggen;

		// Template ausgeben
		$this->Template->id = $this->id;
		$this->Template->linktext = $linktext;
		$this->Template->class = "ce_countdown";
		$this->Template->tabelle = $content;
		$this->Template->datum = $aktdatum;
		$this->Template->turnierende = $this->countdown_ende;
		$this->Template->hinweis = $this->countdown_note;

		return;

	}
}
