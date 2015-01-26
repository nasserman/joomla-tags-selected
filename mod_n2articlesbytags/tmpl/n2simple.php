<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_tags_popular
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<?php JLoader::register('TagsHelperRoute', JPATH_BASE . '/components/com_tags/helpers/route.php'); ?>
<div class="n2articlesbytags<?php echo $moduleclass_sfx; ?>">
<?php if ($list) : ?>
    
    
    <!-- n2 simple start ------------------------------------------------------>
    <div>
        <div class="n2simple-cola"></div>
        
        <div class="n2simple-colb"></div>
    </div>
    <!-- n2 simple end -------------------------------------------------------->
    
    <ul>
    <?php foreach ($list as $i => $item) : ?>
        <li>
            <?php $item->route = new JHelperRoute; ?>
            <a href="<?php echo JRoute::_(TagsHelperRoute::getItemRoute($item->content_item_id, $item->core_alias, $item->core_catid, $item->core_language, $item->type_alias, $item->router)); ?>">
                    <?php if (!empty($item->core_title)) :
                            echo htmlspecialchars($item->core_title);
                        //echo $item->match_count;
                    endif; ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php else : ?>
        <span><?php echo JText::_('MOD_TAGS_SIMILAR_NO_MATCHING_TAGS'); ?></span>
    <?php endif; ?>
</div>
<?php
echo "<div style='text-align: center;font-size: 9px;'>";
echo 'تاریخ ایجاد ماژول : ',JHtml::date(new JDate(),'y-m-d g:i a');
echo "</div>";
?>