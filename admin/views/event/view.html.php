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

    parent::display($tpl);
  }
}
