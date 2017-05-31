<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if(count($modules)): ?>
<div class="quickblocks<?php echo $moduleclass_sfx ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> >
    <?php foreach($modules as $nested_module) {
        echo JModuleHelper::renderModule($nested_module, $module_options);
    } ?>
</div>
<?php endif;
