<?php session_start();?>
<?php include "connect.php";?>
<?php include "top.php";?>
<?php

$numberOfRows1 = $mysqli->query("SELECT * FROM member");
$numberOfRows2 = $numberOfRows1->num_rows;

for ($i = 1; $i <= $numberOfRows2; $i++) {

    $memberinfo = "Select * from member WHERE (id ='$i')";
    $memberinfo2 = $mysqli->query($memberinfo);
    $memberinfo3 = mysqli_fetch_array($memberinfo2);

    echo '<a href="./profile2.php?id=', $memberinfo3['id'], '">', $memberinfo3['username'], '</a> <br> Points: ', $memberinfo3['punkte'], '<br><br>';

}

?>
<?php include "bottom.php";
