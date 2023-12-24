<?php

class aboutController extends Controller {
    function defaultAction() {
    
        $variables['title'] = 'About Us Page';
        $variables['content'] = 'About Us Content of the page';


        $template = new Template();
        $template->view('static-page', $variables);

    }
}
