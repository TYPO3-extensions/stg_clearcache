<?php

########################################################################
# Extension Manager/Repository config file for ext "stg_clearcache".
#
# Auto generated 25-01-2010 16:33
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Clear cache recursive',
	'description' => '"Clear cache for this page" now also affects child pages, if user owns them. Is helpful in bigger installations, where each user has it\'s own branch and can\'t be allowed to clear the cache of the whole server.',
	'category' => 'be',
	'shy' => 0,
	'version' => '2.0.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'doNotLoadInFE' => 1,
	'lockType' => '',
	'author' => 'Steffen Gebert',
	'author_email' => 'steffen@steffen-gebert.de',
	'author_company' => 'Webteam der Freien Wähler Bayern',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:9:"ChangeLog";s:4:"630e";s:10:"README.txt";s:4:"ee2d";s:26:"class.tx_stgclearcache.php";s:4:"db94";s:12:"ext_icon.gif";s:4:"934f";s:17:"ext_localconf.php";s:4:"890b";s:13:"locallang.xml";s:4:"310c";}',
);

?>