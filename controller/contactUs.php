<?php


class contactController extends Controller {
    function defaultAction() {
        include __DIR__ . '/../view/contact-us.html';
    }

    // if we clicked the button send in the contact-us form
    // we will be directed to the thank-u.html;
    // the $action should equal to this function either through $_GET or $_POST
    function sumbitContactFormAction() {
        // validate
        // store data
        // send email

        include __DIR__ . '/../view/thank-u.html';
    }

  
}



