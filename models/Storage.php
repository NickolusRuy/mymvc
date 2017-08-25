<?php

class Storage
{


  public static function getUserList()
  {
    $db =  Db::getConnection();
    $usersList = array();

    $result = $db->query("SELECT * FROM users");

    while($row = $result->fetch())
    {
      $usersList[] = $row['name'];
    }

    return $usersList;

  }

  public static function getAdList()
  {
    $db =  Db::getConnection();
    $usersList = array();

    $result = $db->query("SELECT * FROM users");

    while($row = $result->fetch())
    {
      $usersList[] = $row['name'];
    }
  }


}
