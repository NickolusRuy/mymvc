<?php

include_once ROOT.'/models/Storage.php';

class MainController
{
    public function actionIndex()
    {
		    require_once(ROOT . '/views/main/index.php');
    }


    public function actionUsers()
    {
      $userList =   Storage::getUserList();

      require_once(ROOT . '/views/main/users.php');
    }
}
