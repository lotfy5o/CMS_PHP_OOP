<?php

// if / else logic

// url= index.php?section=about-us => ?? (the null coalescing operator) checks if the left side ($_get['section']) exist
// if not it assigns the $section variable to 'home';
$section = $_GET['section'] ?? 'home';


// if I wrote section=about-us after the question mark in the url, it will direct me to the aboutUs.php
if ($section == 'about-us'){
  
  include __DIR__ . '/controller/aboutUs.php';
  
}
else if ($section == 'contact-us'){
  include __DIR__ . '/controller/contactUs.php';
}
else {
  
  // the index.php calls the homePage.php which is calling the home-page.html
  include __DIR__ . '/controller/homePage.php';
}



