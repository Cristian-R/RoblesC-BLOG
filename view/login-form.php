<?php
    require_once(__DIR__ ."/../model/config.php");
?>

<div class="container"> 
    <div class="jumbotron">

        <h1>Hello, Welcome to my blog...Please login!!!</h1>

        <div class="navbar navbar-inverse" role="group" aria-label="...">

            <a class="btn btn-primary btn-md" type="button" href="index.php" class="btn btn-default">Home page</a>
            <a class="btn btn-primary btn-md" type="button" href="login.php" class="btn btn-default">Login</a>
            <a class="btn btn-primary btn-md" type="button" href="register.php" class="btn btn-default">Register</a>

        </div>
    </div>
</div>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php";?>">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" />
    </div>
    
    <div>
         <label for="password">Password: </label>
         <input type="password" name="password" />
    </div>
   
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
