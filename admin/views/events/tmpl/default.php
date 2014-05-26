<?php
defined('_JEXEC') or die;
?>
<div class="item-page efemerides">
<?php   if (empty($this->events)) { ?>
   <h2><?php echo JText::_('COM_EFEMERIDES_NO_EVENTS'); ?></h2>
<?php }
  else {
    foreach($this->events as $i => $event) { ?>
      <p>
        <?php echo $event->historicdate ?> -
        <?php echo $event->title ?> -
        <?php echo $event->description ?> -
      </p>
<?php
    }
  }
?>
</div>
