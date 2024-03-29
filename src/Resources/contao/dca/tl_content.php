<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   fen
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2013
 */

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['countdown'] = '{type_legend},type,headline;{countdown_legend},countdown_finish,countdown_style;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

/**
 * Felder
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_finish'] = array
(
	'exclude'                 => true,
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_finish'],
	'inputType'               => 'text',
	'eval'                    => array
	(
		'rgxp'                => 'datim', 
		'datepicker'          => true, 
		'tl_class'            => 'w50 wizard'
	),
	'sql'                     => "varchar(10) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_style'] = array
(
	'exclude'                 => true,
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_style'],
	'inputType'               => 'select',
	'options'                 => array(1, 2, 3),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['countdown_style_options'],
	'eval'                    => array
	(
		'tl_class'            => 'w50',
		'includeBlankOption'  => true
	),
	'sql'                     => "varchar(1) NOT NULL default ''"
);

