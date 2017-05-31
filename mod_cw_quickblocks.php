<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Get the name of the module position to render.
$module_position = htmlspecialchars($params->get('module_position'));

// Get the name of the module style to use in rendering modules in the position
$module_chrome = $params->get('module_chrome', 'raw');
$template = JFactory::getApplication()->getTemplate(); // The name of the current template
$module_chrome = preg_replace('/^(system|' . $template . ')\-/i', '', $module_chrome);

// Get the module class suffix
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$modules = JModuleHelper::getModules($module_position);
$module_options = array('style' => $module_chrome);

require JModuleHelper::getLayoutPath('mod_cw_quickblocks', $params->get('layout', 'default'));
