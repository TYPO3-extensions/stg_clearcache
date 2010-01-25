<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2009 Steffen Gebert (steffen@steffen-gebert.de)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   36: class tx_stgclearcache
 *   53:     function clearCachePostProc (&$params, &$pObj)
 *
 * TOTAL FUNCTIONS: 1
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */
class tx_stgclearcache {
	var $extKey = 'stg_clearcache';

	/* @var $queryGeneratorInstance t3lib_queryGenerator */
	var $queryGeneratorInstance;

	/* @var $tceMainInstance t3lib_TCEmain */
	var $tceMainInstance;

	/**
	 * Clear cache post processor.
	 * The same structure as t3lib_TCEmain::clear_cache
	 *
	 * @param	object		$_params: parameter array
	 * @param	object		$pObj: partent object
	 * @return	void
	 */
	function clearCachePostProc (&$params, &$pObj) {
		if ($params['cacheCmd'] && t3lib_div::testInt($params['cacheCmd'])) {

			if ($this->queryGeneratorInstance == null) {
				$this->queryGeneratorInstance = t3lib_div::makeInstance('t3lib_queryGenerator');
			}
			if ($this->tceMainInstance == null) {
				$this->tceMainInstance = t3lib_div::makeInstance('t3lib_TCEmain');
			}

			if ($GLOBALS['BE_USER']->user['admin']) {
				$perms_clause = '1=1';
			}
			else {
				$perms_clause = 'perms_userid=' . intval($GLOBALS['BE_USER']->user["uid"]);
			}

			// read out all pages below this one
			// it's not possible, to directly get ALL pages below, because this function is also
			// called for each below (so each level would delete caches for all its underlying pages)

			// function getTreeList($id, $depth, $begin=0, $perms_clause)
			// $depth: 1	see note above
			// $begin: 0	actual ID is returned, which has to be removed later
			// 		if it would be 1, the first sublevel would be skipped
			$pageList = $this->queryGeneratorInstance->getTreeList($params['cacheCmd'], 1, 0, $perms_clause);

			$pages = explode(',', $pageList);

			// call clear_cacheCmd for every page below
			foreach ($pages as $page) {
				// we know $params['cacheCmd'] is returned from getTreeList again, but we
				// don't want to end in recursive loop
				if ($page != $params['cacheCmd']) {
					$this->tceMainInstance->clear_cacheCmd($page);
				}
			}
		}
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/stg_clearcache/class.tx_stgclearcache.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/stg_clearcache/class.tx_stgclearcache.php']);
}
?>