<?php

// I added the code of the $action logic into the index.php
// chatgpt told me here is not its place.

// // it returns the first operand if exist, if not the second one and so on.
// $action = $_GET['action'] ?? $_POST['action'] ?? 'show';


if ($action == 'show'){
    
    include __DIR__ . '/../view/contact-us.html';
}
else if ($action == 'submit'){
    // validate
    // store data
    // send email

    include __DIR__ . '/../view/thank-u.html';
}
