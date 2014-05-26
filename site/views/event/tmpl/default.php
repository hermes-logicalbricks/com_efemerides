<?php
defined('_JEXEC') or die;
?>
<div class="item-page efemerides">
<?php   if (empty($this->event)) { ?>
   <h2><?php echo JText::_('COM_EFEMERIDES_NO_EVENT'); ?></h2>
<?php }
else {
?>
    <h1><?php echo $this->event->title ?></h1>
    <h2><?php echo $this->event->historicdate ?></h2>
    <p><?php echo $this->event->description ?></p>
<?php
  }
?>
</div>
