<?php
defined('_JEXEC') or die;

class EfemeridesViewEvents extends JViewLegacy
{
  public function display($tpl = null)
  {
    $events = $this->get('Items');
    $this->events = $&events;

    parent::display($tpl);
  }
}
