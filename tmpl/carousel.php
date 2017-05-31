<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Bootstrap 2.3.2 carousel layout
 */

defined('_JEXEC') or die;
?>

<?php if(count($modules)): ?>
<div class="quickblocks<?php echo $moduleclass_sfx ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> >
    <div id="carousel-<?php echo $module->id; ?>" class="carousel slide">
        <ol class="carousel-indicators">
        <?php foreach($modules as $index => $nested_module): ?>
            <li data-target="carousel-<?php echo $module->id; ?>" data-slide-to="<?php echo $index; ?>"<?php echo $index == 0 ? ' class="active"' : ''; ?>></li>
        <?php endforeach; ?>
        </ol>

        <div class="carousel-inner">
        <?php foreach ($modules as $index => $nested_module): ?>
            <div class="item<?php echo $index == 0 ? ' active' : ''; ?>">
                <?php echo JModuleHelper::renderModule($nested_module, $module_options); ?>
            </div>
        <?php endforeach; ?>
        </div>

        <a class="carousel-control left" href="#carousel-<?php echo $module->id; ?>" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#carousel-<?php echo $module->id; ?>" data-slide="next">&rsaquo;</a>
    </div>
</div>
<?php endif;
