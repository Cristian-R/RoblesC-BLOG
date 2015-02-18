<?php
    require_once(__DIR__ ."/../model/config.php");
      require_once (__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        
        header("Location: " . $path . "index.php");
        die();
    } 
    
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
  

    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title',  post = '$post'");
    
    if($query){
        header("Location: " . $path . "index.php");
    }
    else{
        die();
    }
?>
   <?php
date_default_timezone_set('America/Los_Angeles');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo '$script_tz';
} else {
    echo '$script_tz';
}
?> 