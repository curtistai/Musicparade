<?php
session_start();
    
include_once 'MainActionControl.php';
/* Centrallise function to create new session */

class SetSessionActionController extends MainActionControl{
	/* set session by given information */
    public function setSession($name,$value){
        if (isset($name) && isset($value))
            $_SESSION[$name] = $value;
    }
    
}
/* handle by get request */
$controller = new SetSessionActionController();
$controller->setSession($_GET['name'],$_GET['value']);

    
?>