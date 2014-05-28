<?php
defined('_JEXEC') or die;

class EfemeridesViewEvents extends JViewLegacy
{
  public function display($tpl = null)
  {
    $events = $this->get('Items');
    $this->events = &$events;

    $pagination = $this->get('Pagination');
    $this->pagination = $pagination;

    $this->addToolbar();

    parent::display($tpl);
  }

  protected function addToolbar()
  {
    JToolBarHelper::title(JText::_('COM_EFEMERIDES_MANAGER_EVENTS'));
    JToolBarHelper::addNew('event.add');
    JToolBarHelper::editList('event.edit');
    JToolBarHelper::deleteList('','events.delete');
  }
}
