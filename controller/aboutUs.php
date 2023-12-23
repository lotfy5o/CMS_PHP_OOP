<?php

class aboutController extends Controller {
    function defaultAction() {
        // calling the about-us.html page
        include __DIR__ . '/../view/about-us.html';
    }
}
