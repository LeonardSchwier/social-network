<?php session_start(); ?>
<?php include ("connect.php"); ?>
<?php include("top.php"); ?>
<?php

    $sql2 = "SELECT * FROM member";
    
    $numberOfRows = $mysqli -> query($sql2);
    $numberOfRows = $numberOfRows->num_rows;

    if(empty($numberOfRows)) {
        $numberOfRows = 0;
    } 
    
    echo "<marquee>There are already ", $numberOfRows, " members registered!</marquee><br>";
    
    ?>
<?php include("bottom.php"); ?>