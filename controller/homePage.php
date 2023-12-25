<?php


class HomePageController extends Controller {
    function defaultAction() {
        // fetch the SEO
        // get the page data
        // $title
        // $content
        // $variable1

        

    

        $pageObj = new Page();
        $pageObj->findById(1);

        // we gona use the $pageObj inside our template
        $variables['pageObj'] = $pageObj;

        $template = new Template('default');
        $template->view('static-page', $variables);

        // calling the home-page.html page
        // include __DIR__ . '/../view/home-page.html'; 
    }
}

