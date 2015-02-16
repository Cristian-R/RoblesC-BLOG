<?php
    require_once(__DIR__ ."/../model/config.php");
      require_once (__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        header("Location: " . $path . "index.php");
        die();
    } 
    
    
    $query = $SESSION["connection"]->query("string date ( string $format [, int $timestamp = time() ] ");
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
    
    if($query){
        header("Location: " . $path . "index.php");
    }
    else{
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
    