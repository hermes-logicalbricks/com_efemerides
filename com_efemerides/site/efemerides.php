<?php
/**
 * @package    Efemerides
 * @subpackage Components
 * components/com_efemerides/efemerides.php
 * @link http://revolucionemosoaxaca.org
 * @license    GNU/GPL
*/
// no direct access
defined('_JEXEC') or die( 'Restricted access' );

jimport ('joomla.application.component.controller');
/*
// Require the base controller
//require_once( JPATH_COMPONENT.DS.'controller.php' );

// Require specific controller if requested
//if($controller = JRequest::getWord('controller')) {
//    $path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';
//    if (file_exists($path)) {
//        require_once $path;
//    } else {
//        $controller = '';
//    }
//}
*/
// Create the controller
//$classname    = 'EfemeridesController'.$controller;
//$controller   = new $classname( );
$controller = JController::getInstance('Efemerides');
// Perform the Request task

$controller->execute(JRequest::getCmd('task'));
// Redirect if set by the controller
$controller->redirect();
?>
