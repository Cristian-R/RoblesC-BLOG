<?php

require_once(__DIR__ . "/../model/config.php");
     require_once (__DIR__ . "/../controller/login-verify.php");
    
  


$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");
//creates a table for the posts(ABOVE)
if ($query) {
    echo "<p>Succesfully a create table: posts</p>";
} 
else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}

$query = $_SESSION["connection"]->query("CREATE TABLE users ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "username varchar(30) NOT NULL,"
        . "email varchar(50) NOT NULL,"
        . "password char(128) NOT NULL,"
        . "salt char(128) NOT NULL,"
        . "PRIMARY KEY (id))");
//Creates a table for users(ABOVE)
if ($query) {
    echo "<p>Succesfully create table: users</p>";
} 
else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
?>