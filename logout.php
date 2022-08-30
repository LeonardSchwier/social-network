<?php session_start(); ?>
<?php include ("top.php"); ?>
<?php
 unset($_SESSION['userid']);  
 unset($_SESSION['user']);  
 session_destroy();
 
    echo "You logged out successfully.";
    echo '<br>You will be redirected in a few seconds. If not, please click <a href="index.php">here</a>.';
    echo '<meta http-equiv="refresh" content="3; URL=index.php"> ';
?>
<?php include ("bottom.php"); ?>