<?php
defined('_JEXEC') or die;

class EfemeridesViewEvent extends JViewLegacy
{
  public function display($tpl = null)
  {
    $this->event = $this->get('Item');
    $this->form = $this->get('Form');

    if(count($errors = $this->get('Errors'))) {
      JError::raiseError(500, implode("\n", $errors));
      return false;
    }

    $this->addToolbar();

    parent::display($tpl);
  }

  protected function addToolbar()
  {
    JFactory::getApplication()->input->set('hidemainmenu', true);

    $isNew = empty($this->event->id);

    JToolbarHelper::title(JText::_('COM_EFEMERIDES_MANAGER_EVENT'), 'event.png');

    JToolbarHelper::apply('event.apply');
    JToolbarHelper::save('event.save');
    JToolbarHelper::cancel('event.cancel');
    JToolbarHelper::divider();
    JToolbarHelper::help('JHELP_COMPONENTS_EFEMERIDES_EVENT_EDIT');
  }
}
