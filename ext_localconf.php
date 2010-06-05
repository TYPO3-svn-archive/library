<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'Index' => 'index',
		'Article' => 'index, new, create, edit, update, delete',
		'Category' => 'index, new, create, edit, update, delete',
	),
	array(
		'Article' => 'index,create, update, delete',
		'Category' => 'create, update, delete',
	)
);

?>