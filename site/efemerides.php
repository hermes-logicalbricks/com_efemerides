<?php
defined('_JEXEC') or die;

$controller = JControllerLegacy::getInstance('Efemerides');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
