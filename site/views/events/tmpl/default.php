<?php
defined('_JEXEC') or die;
?>
<div class="item-page efemerides">
<?php   if (empty($this->events)) { ?>
   <h2><?php echo JText::_('COM_EFEMERIDES_NO_EVENTS'); ?></h2>
<?php }
  else {
    foreach($this->events as $i => $event) { ?>
      <div>
        <h3>
          <a href="<?php echo JRoute::_('index.php?option=com_efemerides&view=event&id='.$event->id); ?>">
            <?php echo $event->historicdate ?>
          </a>
        </h3>
        <h3><?php echo $event->title ?></h3>
        <p><?php echo $event->description ?></p>
      </div>
<?php
    }
  }
?>
</div>
