<?php
session_start();
    
include_once 'MainActionControl.php';

class SetSessionActionController extends MainActionControl{
    public function setSession($name,$value){
        if (isset($name) && isset($value))
            $_SESSION[$name] = $value;
    }
    
}

$controller = new SetSessionActionController();
$controller->setSession($_GET['name'],$_GET['value']);

    
?>