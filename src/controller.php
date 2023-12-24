<?php

class Controller {
    function runAction ($actionName) {

        echo 'inside Controller::runAction<br>';
        if (method_exists($this, 'runBeforeAction')){
            $this->runBeforeAction();
        }


        // for exampel if the $actionName = show it  will be showAction
        $actionName .= 'Action';
        if (method_exists($this, $actionName)) {
            // run showAction();
            $this->$actionName();
        } else {
            // if the function showAction() doesn't exist direct me
            include __DIR__ . '/../view/status-pages/404.html';
        }
    }

}