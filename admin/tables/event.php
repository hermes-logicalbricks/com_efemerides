<?php
  defined('_JEXEC') or die;

class EfemeridesTableEvent extends JTable
{
  public function __construct(&$db)
  {
    parent::__construct('#__efemerides', 'id', $db);
  }

  public function bind($array, $ignore='')
  {
    return parent::bind($array, $ignore);
  }

  public function store($updateNulls = false)
  {
    return parent::store($updateNulls);
  }

  public function check()
  {
    if (trim($this->title) == '') {
      $this->setError(JText::_('COM_EFEMERIDES_ERR_TABLES_TITLE'));
      return false;
    }
    return true;
  }
}
