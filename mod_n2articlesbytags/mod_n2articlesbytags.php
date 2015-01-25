<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_tags_similar.
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';
require_once __DIR__.'/n2tags.php';

$cacheparams = new stdClass;
$cacheparams->cachemode = 'safeuri';
$cacheparams->class = 'ModN2articlesByTagsHelper';
$cacheparams->method = 'getContentList';
$cacheparams->methodparams = $params;
$cacheparams->modeparams = array('id' => 'array', 'Itemid' => 'int');

$list = JModuleHelper::moduleCache($module, $params, $cacheparams);

if (!count($list))
{
	return;
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_n2articlesbytags', $params->get('layout', 'default'));
