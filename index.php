<?php
session_start();


define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('VIEW_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);


require_once ROOT_PATH . '/src/controller.php';
require_once ROOT_PATH . '/src/template.php';
require_once ROOT_PATH . '/src/databaseConnection.php';
require_once ROOT_PATH . '/model/page.php';

// connect to a MySQL
DatabaseConnection::connect('localhost', 'darwin_cms', 'root', '');
        


// if / else logic

// url= index.php?section=about-us => ?? (the null coalescing operator) checks if the left side ($_get['section']) exist
// if not it assigns the $section variable to 'home';
$section = $_GET['section'] ?? $_POST['section'] ?? 'home';

// it returns the first operand if exist, if not the second one and so on.
$action = $_GET['action'] ?? $_POST['action'] ?? 'default'; // we replaced 'show' with 'default' cuz it wont be limited to the contactUs.php

// echo $action;
// if I wrote section=about-us after the question mark in the url, it will direct me to the aboutUs.php
if ($section == 'about'){
  include ROOT_PATH . '/controller/aboutUs.php';
  $aboutController = new aboutController();
  $aboutController->runAction($action);
} else if ($section == 'contact'){

  include ROOT_PATH . '/controller/contactUs.php';
  $contactController = new contactController();
  $contactController->runAction($action);

} else {
  
  
  include ROOT_PATH . '/controller/homePage.php';
  $homePageController = new HomePageController();
  $homePageController->runAction($action);
}



