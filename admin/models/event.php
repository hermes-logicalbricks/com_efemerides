<?php
defined('_JEXEC') or die;

class EfemeridesModelEvent extends JModelAdmin
{
  public function &getItem($pk = null)
  {
    $app = JFactory::getApplication('site');
    $id = $app->input->getInt('id');

    if (empty($id)){
      return $data;
    }

    $db = JFactory::getDBO();
    $query = $db->getQuery(true);
    $query->select('id,historicdate,title,description');
    $query->from('#__efemerides');
    $query->where('id = '.$id);

    $db->setQuery($query);
    $data = $db->loadObject();

    return $data;
  }

  public function getForm($data = array(), $loadData = true)
  {
    $app = JFactory::getApplication();

    $form = $this->loadForm('com_efemerides.event', 'event', array('control' => 'jform', 'load_data' => $loadData));
    if (empty($form)) {
      return false;
    }
    return $form;
  }

  public function loadFormData()
  {
    $data = JFactory::getApplication()->getUserState('com_efemerides.edit.event.data', array());
    if (empty($data)){
      $data = $this->getItem();
    }
    return $data;
  }

  public function getTable($type = 'Event', $prefix = 'EfemeridesTable', $config = array())
  {
    return JTable::getInstance($type, $prefix, $config);
  }
}
