<?php
    session_start();
    unset($_SESSION['sysControl']);
    var_dump($_SESSION);
    session_unset();
?>