<?php

include_once ROOT.'/models/User.php';
include_once ROOT.'/models/Advertisement.php';

class MainController
{
    public function actionIndex()
    {
		    require_once(ROOT . '/views/main/index.php');
    }


    public function actionUsers()
    {
      $userList =   User::getUserList();;

      require_once(ROOT . '/views/main/users.php');
    }

    public function actionAdvertisement()
    {
      $aList = Advertisement::getAdsList();
        require_once(ROOT . '/views/main/advertisement.php');
    }
}
