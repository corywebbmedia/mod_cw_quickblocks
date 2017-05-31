<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Bootstrap 2.3.2 tabs layout
 */

defined('_JEXEC') or die;
?>

<?php if(count($modules)): ?>
<div class="quickblocks<?php echo $moduleclass_sfx ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> >
    <ul class="nav nav-tabs">
    <?php foreach($modules as $index => $nested_module): ?>
        <li<?php echo $index == 0 ? ' class="active"' : ''; ?>>
            <a href="#quickblocks-tab-<?php echo $module->id ?>-<?php echo $index; ?>" data-toggle="tab">
                <?php echo $nested_module->title; ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>

    <div class="tab-content">
    <?php foreach ($modules as $index => $nested_module): ?>
        <div class="tab-pane<?php echo $index == 0 ? ' active' : ''; ?>" id="quickblocks-tab-<?php echo $module->id ?>-<?php echo $index; ?>">
            <?php echo JModuleHelper::renderModule($nested_module, $module_options); ?>
        </div>
    <?php endforeach; ?>
    </div>
</div>
<?php endif;
