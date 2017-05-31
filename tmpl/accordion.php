<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Bootstrap 2.3.2 accordion layout
 */

defined('_JEXEC') or die;
?>

<?php if(count($modules)): ?>
<div class="quickblocks<?php echo $moduleclass_sfx ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> >
    <div class="accordion" id="accordion<?php echo $module->id; ?>">
    <?php foreach ($modules as $index => $nested_module): ?>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $module->id; ?>" href="#collapse-<?php echo $module->id; ?>-<?php echo $index; ?>">
                    <?php echo $nested_module->title; ?>
                </a>
            </div>
            <div id="collapse-<?php echo $module->id; ?>-<?php echo $index; ?>" class="accordion-body collapse<?php echo $index == 0 ? ' in' : ''; ?>">
                <div class="accordion-inner">
                    <?php echo JModuleHelper::renderModule($nested_module, $module_options); ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>
<?php endif;
