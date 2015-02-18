<?php
require_once(__DIR__. "/database.php");
session_start();  

session_regenerate_id(true);

$path = "/RoblesC-BLOG/";
   
$host = "localhost";

$username = "root";

$password = "root";

$database = "blog_db";
//session connection represents database
if(!isset($_SESSION["connection"])){
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}

