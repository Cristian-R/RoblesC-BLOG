    <link type='text/css' rel='stylesheet' href='css/bootstrap-theme.css'>
    <link type='text/css' rel='stylesheet' href='css/bootstrap.css'>
    <link type='text/css' rel='stylesheet' href='css/index.css'>
    <link rel="shortcut icon" href="https://farm9.staticflickr.com/8115/8673546462_73b2df8cb3.jpg">
    <title>RoblesC-BLOG</title>
    
  <div class="container"> 
    <div class="jumbotron">
        
  <h1>Hello, Welcome to my blog!!!</h1>
  
<div class="btn-group" role="group" aria-label="...">
  <a class="btn btn-primary btn-md" type="button" href="login.php" class="btn btn-default">Login</a>
  <a class="btn btn-primary btn-md" type="button" href="controller/logout-user.php" class="btn btn-default">Logout</a>
  <a class="btn btn-primary btn-md" type="button" href="register.php" class="btn btn-default">Register</a>

  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
      Portfolio 3
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="Cristian-Robles portfolio 2.0/index.html">About me</a></li>
      <li><a href="Cristian-Robles portfolio 2.0/Projects.html">Projects</a></li>
      <li><a href="Cristian-Robles portfolio 2.0/Technology.html">Technology</a></li>
    </ul>
  </div>
</div>
  
  
  
   </div>
        </div>

<?php
   
    require_once (__DIR__ . "/controller/login-verify.php");

    require_once (__DIR__ . "/view/header.php");

    if(authenticateUser()){
         require_once(__DIR__ . "/view/navigation.php");
    }

    require_once (__DIR__ . "/controller/create-db.php");

    require_once (__DIR__ . "/view/footer.php");

    require_once (__DIR__ . "/controller/read-posts.php");
?>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
    
    