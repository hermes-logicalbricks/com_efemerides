<?php
defined('_JEXEC') or die;

class EfemeridesModelEvents extends JModelList
{
  public function getListQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);
    $query->select('id,historicdate,title,description');
    $query->from('#__efemerides');
    return $query;
  }
}
