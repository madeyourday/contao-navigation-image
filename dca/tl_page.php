<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/*
 * Copyright MADE/YOUR/DAY <mail@madeyourday.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Palettes
 */
foreach($GLOBALS['TL_DCA']['tl_page']['palettes'] as $name => $palette){
	if($name === '__selector__'){
		continue;
	}
	$GLOBALS['TL_DCA']['tl_page']['palettes'][$name] = str_replace('{meta_legend}', '{navigationImage_legend:hide},navigationImage;{meta_legend}', $palette);
}

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['navigationImage'] = array(
	'label'     => &$GLOBALS['TL_LANG']['tl_page']['navigationImage'],
	'inputType' => 'fileTree',
	'exclude'   => true,
	'eval'      => array(
		'fieldType'  => 'radio',
		'files'      => true,
		'filesOnly'  => true,
		'extensions' => 'jpg,jpeg,gif,png'
	),
);
