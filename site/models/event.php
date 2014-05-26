<?php
defined('_JEXEC') or die;

class EfemeridesModelEvent extends JModelItem
{
  public function &getItem($pk = null)
  {
    $app = JFactory::getApplication('site');
    $id = $app->input->getInt('id');

    $db = JFactory::getDBO();
    $query = $db->getQuery(true);
    $query->select('id,historicdate,title,description');
    $query->from('#__efemerides');
    $query->where('id = '.$id);

    $db->setQuery($query);
    $data = $db->loadObject();

    return $data;
  }
}
