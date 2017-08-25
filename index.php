<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Router
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once ROOT."/components/Db.php";


session_start();

//Call router
$router = new Router();
$router->run();


//require_once(ROOT.'/models/User.php');
