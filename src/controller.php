<?php

class Controller {
    function runAction ($actionName) {

       
        if (method_exists($this, 'runBeforeAction')){
            $result = $this->runBeforeAction();
            // checks if the runBeforeAction returns anything.
            // if false it will stop excuting
            // if true it will excute the action in the $actionName
            if ($result == false){
                return;
            }
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