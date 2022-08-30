<?php session_start(); ?>
<?php include ("connect.php"); ?>
<?php include ("top.php"); ?>
<?php

            $id = $_SESSION['userid'];
            $user = $_SESSION['user'];

            
            $memberinfo = "Select * from member WHERE (id ='$id') AND (username = '$user')";
            $memberinfo2 = $mysqli -> query($memberinfo);
            $memberinfo3 = mysqli_fetch_array($memberinfo2);

    $active = $memberinfo3['active'];

    if ($id != "")
    {
    if ($active == 1)
    
    {
            $memberinfo = "Select * from member WHERE (id ='$id')";
            $memberinfo2 = $mysqli -> query($memberinfo);
            $memberinfo3 = mysqli_fetch_array($memberinfo2);


            echo "User id: ", $id, "<br>";
            echo "Username: ", $user, "<br>";
            echo "Points: ",$memberinfo3['punkte'], "</b><br>";
            
    

            
            
    }
    else
    {
        
        if(isset($_POST['activate']))
{
  
  
            $id = $_SESSION['userid'];
            $user = $_SESSION['user'];
    
    $sql = "UPDATE member SET active='1' WHERE (id ='$id') AND (username = '$user')";
    $result = $mysqli -> query($sql);
    echo 'Account was acitvated successfully. You will be redirect in a few seconds. If not, please click <a href="profile.php">here</a>.';
    echo '<meta http-equiv="refresh" content="3; URL=profile.php"> ';
}
else
{
    echo "Your profile is not yet activated!<br>Please activate it!<br>";
    echo '<form action="profile.php" method="post">';
    echo '<input type="submit" name="activate" value="Activate account"></form>';
}
    }
    }
    else
    {
        echo "You are not logged in.";
    }
?>
        

            
<?php include ("bottom.php"); ?>
        