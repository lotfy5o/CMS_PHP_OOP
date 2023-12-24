<?php


class contactController extends Controller {

    function runBeforeAction() {
        echo 'inside contactController::beforeAction <br>';
        // we can use: var_dump($_GET);
        // var_dump is good for telling you where u are. so u don't need to look for the function
        if ($_SESSION['has_submitted_form'] ?? 0 == 1){
            
            include __DIR__ . '/../view/contact/contact-us-already-contacted.html';
            return false;
        }
        return true;
    }

    function defaultAction() {
       
        echo 'inside contactController::defaultAction<br>';
        include __DIR__ . '/../view/contact/contact-us.html';
    }

    // if we clicked the button send in the contact-us form
    // we will be directed to the thank-u.html;
    // the $action should equal to this function either through $_GET or $_POST
    function sumbitContactFormAction() {
    
        
        // validate
        // store data
        // send email
        
        $_SESSION['has_submitted_form'] = 1;
        include __DIR__ . '/../view/contact/thank-u.html';
    }

  
}



