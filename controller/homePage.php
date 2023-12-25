<?php


class HomePageController extends Controller {
    function defaultAction() {
        // fetch the SEO
        // get the page data
        // $title
        // $content
        // $variable1

        

        $variables['title'] = 'Home Page Title';
        $variables['content'] = 'Welcome to our homepage';


        $template = new Template('default');
        $template->view('static-page', $variables);

        // calling the home-page.html page
        // include __DIR__ . '/../view/home-page.html'; 
    }
}

