
<?php

    require_once (__DIR__ . "/../model/config.php");
    
    unset($_SESSION["authenticated"]);
        
    session_destroy();

    header("Location: " . $path . "index.php");
    
    if($session_destroy){
        echo"successfully logged out";
    }
        
    
    