<?php
defined('_JEXEC') or die;

class EfemeridesViewEvent extends JViewLegacy
{
  public function display($tpl = null)
  {
    $event = $this->get('Item');
    $this->event = &$event;

    parent::display($tpl);
  }
}
