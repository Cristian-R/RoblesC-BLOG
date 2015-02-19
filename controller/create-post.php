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
?> <?php
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 days; 24 hours; 60 mins; 60 secs
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
// or using strtotime():
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";

    }
    else{    }

        die();
?>
   <?php
date_default_timezone_set('America/Los_Angeles');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo '$script_tz';
} else {
    echo '$script_tz';
}
