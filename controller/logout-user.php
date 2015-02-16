<link type='text/css' rel='stylesheet' href='css/bootstrap-theme.css'>
    <link type='text/css' rel='stylesheet' href='css/bootstrap.css'>
    <link type='text/css' rel='stylesheet' href='css/index.css'>
    <link type='text/css' rel='stylesheet' href='css/script.css'>
<?php

    require_once (__DIR__ . "/../model/config.php");
    
    unset($_SESSION["authenticated"]);
        
    session_destroy();

    header("Location: " . $path . "index.php");
 
        
    
    