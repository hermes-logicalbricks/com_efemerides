<?php
defined('_JEXEC') or die;

class EfemeridesController extends JControllerLegacy
{
  public function display($cachable = false, $urlparams = false)
  {
    $document = JFactory::getDocument();

    $id = $this->input->getInt('id');

    $viewName = $this->input->get('view','events');
    $this->input->set('view', $viewName);

    parent::display($cachable, $urlparams);

    return $this;
  }
}
