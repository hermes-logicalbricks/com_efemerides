<?php
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>

<script type="text/javascript">
Joomla.submitbutton = function(task)
  {
    if (task == 'event.cancel' || document.formvalidator.isValid(document.id('efemerides-event-form')))  {
      <?php echo $this->form->getField('description')->save(); ?>
      Joomla.submitform(task, document.getElementById('efemerides-event-form'));
    }
    else {
      alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED')); ?>');
   }
  }
</script>

<?php
  $id = empty($this->event->id) ? 0 : $this->event->id;
?>
<form action="<?php echo JRoute::_('index.php?option=com_efemerides&layout=edit&id='.(int) $id); ?>" method="post" name="adminForm" id="efemerides-event-form" class="form-validate">
  <div class="row-fluid">
    <div class="span10 form-horizontal">

      <fieldset>
        <ul class="nav nav-tabs">
          <li class="active"><a href="#details" data-toggle="tab"><?php echo empty($this->event->id) ? JText::_('COM_EFEMERIDES_NEW_EVENT') : JText::sprintf('COM_EFEMERIDES_EDIT_EVENT', $this->event->id); ?></a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="details">
            <div class="control-group">
              <div class="control-label"><?php echo $this->form->getLabel('historicdate'); ?></div>
              <div class="controls"><?php echo $this->form->getInput('historicdate'); ?></div>
            </div>
            <div class="control-group">
              <div class="control-label"><?php echo $this->form->getLabel('title'); ?></div>
              <div class="controls"><?php echo $this->form->getInput('title'); ?></div>
            </div>
            <div class="control-group">
              <div class="control-label"><?php echo $this->form->getLabel('description'); ?></div>
              <div class="controls"><?php echo $this->form->getInput('description'); ?></div>
            </div>
            <div class="control-group">
              <div class="control-label"><?php echo $this->form->getLabel('id'); ?></div>
              <div class="controls"><?php echo $this->form->getInput('id'); ?></div>
            </div>
          </div>
          <input type="hidden" name="task" value="" />
          <?php echo JHtml::_('form.token'); ?>
        </div>
      </fieldset>

    </div>
  </div>

</form>
