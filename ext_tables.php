<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'library'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'library');

//$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_list.xml');

/* 
t3lib_extMgm::addLLrefForTCAdescr('tx_library_domain_model_article','EXT:library/Resources/Private/Language/locallang_csh_tx_library_domain_model_article.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_library_domain_model_article');
$TCA['tx_library_domain_model_article'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:library/Resources/Private/Language/locallang_db.xml:tx_library_domain_model_article',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/Tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_library_domain_model_article.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_library_domain_model_category','EXT:library/Resources/Private/Language/locallang_csh_tx_library_domain_model_category.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_library_domain_model_category');
$TCA['tx_library_domain_model_category'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:library/Resources/Private/Language/locallang_db.xml:tx_library_domain_model_category',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/Tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_library_domain_model_category.gif'
	)
);
 */
?>