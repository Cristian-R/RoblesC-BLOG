<link type='text/css' rel='stylesheet' href='css/bootstrap-theme.css'>
<link type='text/css' rel='stylesheet' href='css/bootstrap.css'>
<link type='text/css' rel='stylesheet' href='index.css'>
<link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/453797908786065408/d3NChSeq_400x400.jpeg">
<title>RoblesC-BLOG</title>
<html>
    <body>
        
        
<div class="container"> 
    <div class="jumbotron">

        <h1>Hello, Welcome to my blog!!!</h1>

        <div class="navbar navbar-inverse" role="group" aria-label="...">

            <a class="btn btn-primary btn-md" type="button" href="login.php" class="btn btn-default">Login</a>           
            <a class="btn btn-primary btn-md" type="button" href="register.php" class="btn btn-default">Register</a>
         
            <div  class="btn-group" role="group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Portfolio 2
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">

                    <li><a href="Portfolio2-jQuery-master/public_html/index.html">About me</a></li>
                    <li><a href="Portfolio2-jQuery-master/public_html/Projects.html">Projects</a></li>
                    <li><a href="Portfolio2-jQuery-master/public_html/Technology.html">Technology</a></li>  
                    <li role="presentation" class="divider"></li>
                    <li><a href="Portfolio2-jQuery-master/public_html/jQuery.html">jQuery</a></li>    

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
    </body>
</html>