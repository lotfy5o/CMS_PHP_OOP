<?php


class contactController {
    function showFormAction() {
        include __DIR__ . '/../view/contact-us.html';
    }

    // if we clicked the button send in the contact-us form
    // we will be directed to the thank-u.html;
    function sumbitContactFormAction() {
        // validate
        // store data
        // send email

        include __DIR__ . '/../view/thank-u.html';
    }
}



