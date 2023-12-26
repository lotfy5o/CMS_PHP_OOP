<?php

// session_start();
class contactController extends Controller {

    function runBeforeAction() {
        

        // we can use: var_dump($_GET);
        // var_dump is good for telling you where u are. so u don't need to look for the function
        if ($_SESSION['has_submitted_form'] ?? 0 == 1){
            
            
            $dbh = DatabaseConnection::getInstance();
            $dbc = $dbh->getConnection();
    
        
    
            $pageObj = new Page($dbc);
            $pageObj->findById(3);
            $variables['pageObj'] = $pageObj;


            $template = new Template('default');
            $template->view('static-page', $variables);
            return false;
        }
        return true;
    }

    function defaultAction() {

        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

    

        $pageObj = new Page($dbc);
        $pageObj->findById(5);
        $variables['pageObj'] = $pageObj;


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

        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

    

        $pageObj = new Page($dbc);
        $pageObj->findById(4);
        $variables['pageObj'] = $pageObj;


        $template = new Template('default');
        $template->view('static-page', $variables);

    }

  
}



