<?php

class Template {
    function view($template, $variables) {

        extract($variables);
        include __DIR__ . '/../view/' . $template . '.html';
    }
}