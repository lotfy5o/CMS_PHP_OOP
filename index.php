<?php
session_start();
require_once __DIR__ . '/src/controller.php';
require_once __DIR__ . '/src/template.php';


// if / else logic

// url= index.php?section=about-us => ?? (the null coalescing operator) checks if the left side ($_get['section']) exist
// if not it assigns the $section variable to 'home';
$section = $_GET['section'] ?? $_POST['section'] ?? 'home';

// it returns the first operand if exist, if not the second one and so on.
$action = $_GET['action'] ?? $_POST['action'] ?? 'default'; // we replaced 'show' with 'default' cuz it wont be limited to the contactUs.php

// echo $action;
// if I wrote section=about-us after the question mark in the url, it will direct me to the aboutUs.php
if ($section == 'about'){
  include __DIR__ . '/controller/aboutUs.php';
  $aboutController = new aboutController();
  $aboutController->runAction($action);
} else if ($section == 'contact'){

  include __DIR__ . '/controller/contactUs.php';
  $contactController = new contactController();
  $contactController->runAction($action);

} else {
  
  // the index.php calls the homePage.php which is calling the home-page.html
  include __DIR__ . '/controller/homePage.php';
  $homePageController = new HomePageController();
  $homePageController->runAction($action);
}



