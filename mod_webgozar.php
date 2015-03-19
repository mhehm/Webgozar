<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_webgozar
 *
 * @copyright   Copyright (C) 2014 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$moduleclass_sfx  = htmlspecialchars($params->get('moduleclass_sfx'));
$type             = (string) $params->get('type');
$newsletterLayout = (string) $params->get('newsletter', 'v');
$code             = (int) $params->get('code');
$showCounter      = (int) $params->get('counter', 1);

if ($code)
{
	require JModuleHelper::getLayoutPath('mod_webgozar', $params->get('layout', 'default'));
}
