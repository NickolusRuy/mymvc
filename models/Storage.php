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
    $adsList = array();

    $result = $db->query("SELECT advertisement.title, users.name FROM advertisement INNER JOIN users ON users.id = advertisement.id_user");

   $i = 0;
    while($row = $result->fetch())
    {
      $adsList[$i]['name'] = $row['name'];
      $adsList[$i]['title'] = $row['title'];
      $i++;
    }

    return   $adsList;


  }


}
