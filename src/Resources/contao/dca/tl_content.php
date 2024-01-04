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
$GLOBALS['TL_DCA']['tl_content']['palettes']['countdown'] = '{type_legend},type,headline;{countdown_legend_csv},countdown_csv;{countdown_legend_aufab},countdown_markierungen,countdown_markBold,countdown_markItalic;{countdown_legend_lightbox},countdown_lightbox;{countdown_legend_optionen},countdown_namendrehen,countdown_flaggen,countdown_date,countdown_ende,countdown_note;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_csv'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_csv'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'textarea',
	'eval'                    => array
	(
		'allowHtml'           => true,
		'class'               => 'monospace',
		'rows'                => 30,
		'rte'                 => 'ace',
		'helpwizard'          => true
	),
	'explanation'             => 'countdown_csv',
	'sql'                     => "mediumtext NULL",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_file'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_file'],
	'inputType'               => 'fileTree',
	'eval'                    => array
	(
		'files'               => true,
		'filesOnly'           => true,
		'fieldType'           =>'radio',
		'extensions'          => 'csv,txt',
		'maxlength'           => 255,
		'helpwizard'          => true
	),
	'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_markBold'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_markBold'],
	'inputType'               => 'text',
	'eval'                    => array
	(
		'tl_class'            => 'long',
	),
	'sql'                     => "blob NULL",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_markItalic'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_markItalic'],
	'inputType'               => 'text',
	'eval'                    => array
	(
		'tl_class'            => 'long',
	),
	'sql'                     => "blob NULL",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_markierungen'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_markierungen'],
	'inputType'               => 'countdownColors',
	'eval'                    => array
	(
		'tl_class'            => 'long',
		'helpwizard'          => false,
	),
	'sql'                     => "varchar(1024) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_namendrehen'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_namendrehen'],
	'inputType'               => 'checkbox',
	'eval'                    => array
	(
		'tl_class'            => 'w50',
		'isBoolean'           => true,
		'helpwizard'          => true,
	),
	'explanation'             => 'Hilfetext',
	'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_flaggen'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_flaggen'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class' => 'w50','isBoolean' => true),
	'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_date'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_date'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class' => 'w50','isBoolean' => true),
	'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_ende'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_ende'],
	'inputType'               => 'text',
	'exclude'                 => false,
	'search'                  => true,
	'sorting'                 => true,
	'flag'                    => 8,
	'filter'                  => true,
	'eval'                    => array
	(
		'rgxp'                => 'date',
		'datepicker'          => true,
		'tl_class'            => 'w50 wizard',
		'doNotCopy'           => true
	),
	'sql'                     => "varchar(11) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_note'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_note'],
	'inputType'               => 'text',
	'eval'                    => array
	(
		'tl_class'            => 'w50 long',
		'maxlength'           => 255,
	),
	'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_lightbox'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_lightbox'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 clr','isBoolean' => true,'submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_linktext'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['countdown_linktext'],
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=> 'w50 clr', 'maxlength'=>32),
	'sql'                     => "varchar(32) NOT NULL default ''",
);
