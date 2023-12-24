<?php


class contactController extends Controller {

    private function runBeforeAction() {
        if ($_SESSION['has_submitted_form'] ?? 0 == 1){
            
            include __DIR__ . '/../view/contact/contact-us-already-contacted.html';
            return false;
        }
        return true;
    }

    function defaultAction() {
        if ($_SESSION['has_submitted_form'] ?? 0 == 1){
            include __DIR__ . '/../view/contact/thank-u.html';
        }
        include __DIR__ . '/../view/contact/contact-us.html';
    }

    // if we clicked the button send in the contact-us form
    // we will be directed to the thank-u.html;
    // the $action should equal to this function either through $_GET or $_POST
    function sumbitContactFormAction() {
        // we used the ! operator cuz the runBeforeAction is returning false
        // and we want to check if that happened we wana do something
        // so ! false == true
        if (!$this->runBeforeAction()){
            return;
        }
        
        // validate
        // store data
        // send email
        
        $_SESSION['has_submitted_form'] = 1;
        include __DIR__ . '/../view/contact/thank-u.html';
    }

  
}



