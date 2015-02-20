<?php

    require_once(__DIR__ . "/../model/config.php");
    
?>

<h1>Register</h1>

<form class="navbar-form navbar-left" method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    
    <div>
        <label for="email">Email: </label>
        <input type="text" class="form-control" type="text" name="email" />          
    </div>
       
    <div>
        <label for="username">Username: </label>
        <input  class="form-control"  type="text" name="username" />
    </div>
    
    <div>
         <label for="password">Password: </label>
         <input class="form-control"  type="password" name="password" />
    </div>
   
    <div>
        <button class="btn btn-default" type="submit">Submit</button>
    </div>
    
</form>



