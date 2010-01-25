<?php
if(!defined('TYPO3_MODE'))   die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][] = 'EXT:stg_clearcache/class.tx_stgclearcache.php:&tx_stgclearcache->clearCachePostProc';

// override clear_cache label
$TYPO3_CONF_VARS['BE']['XLLfile']['EXT:lang/locallang_core.php'] = t3lib_extMgm::extPath($_EXTKEY) . 'locallang.xml';

?>