<?php

class Template {
    private $layout;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    // the static-page is part of the default.html 
    // the $template = 'static-page' or 'contact/contact-us'
    function view($template, $variables) {

        extract($variables);
        // $template = new Template('default'), layout = default
        include VIEW_PATH . 'layout/' . $this->layout . '.html';
    }
}