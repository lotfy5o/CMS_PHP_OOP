<?php

// session_start();
class contactController extends Controller {

    function runBeforeAction() {
        

        // we can use: var_dump($_GET);
        // var_dump is good for telling you where u are. so u don't need to look for the function
        if ($_SESSION['has_submitted_form'] ?? 0 == 1){
            
            
            $variables['title'] = 'You Already Submitted the Form';
            $variables['content'] = 'Please be patient as we process your message';


            $template = new Template('default');
            $template->view('static-page', $variables);
            return false;
        }
        return true;
    }

    function defaultAction() {

        $variables['title'] = 'Contact Us';
        $variables['content'] = 'Please Write Us a Message';


        $template = new Template('default');
        $template->view('contact/contact-us', $variables);
    }

    // if we clicked the button send in the contact-us form
    // we will be directed to the thank-u.html;
    // the $action should equal to this function either through $_GET or $_POST
    function sumbitContactFormAction() {
    
        
        // validate
        // store data
        // send email
        
        $_SESSION['has_submitted_form'] = 1;

        $variables['title'] = 'Thank You for Your Message';
        $variables['content'] = 'We Will Get Back to You';


        $template = new Template('default');
        $template->view('static-page', $variables);

    }

  
}



