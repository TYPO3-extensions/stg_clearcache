<?php

########################################################################
# Extension Manager/Repository config file for ext "stg_clearcache".
#
# Auto generated 08-01-2011 13:31
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Clear cache recursive',
	'description' => '"Clear cache for this page" now also affects child pages. This is helpful in bigger installations, where you can\'t/don\'t want to enable users to clear the cache of the whole server.',
	'category' => 'be',
	'shy' => 0,
	'version' => '2.1.1',
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
	'_md5_values_when_last_written' => 'a:8:{s:9:"ChangeLog";s:4:"b49c";s:26:"class.tx_stgclearcache.php";s:4:"dc18";s:16:"ext_autoload.php";s:4:"97af";s:12:"ext_icon.gif";s:4:"934f";s:17:"ext_localconf.php";s:4:"890b";s:15:"ext_php_api.dat";s:4:"2dcb";s:13:"locallang.xml";s:4:"310c";s:14:"doc/manual.sxw";s:4:"7504";}',
	'suggests' => array(
	),
);

?>