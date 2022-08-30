<?php session_start(); ?>
<?php include ("connect.php"); ?>
<?php include ("top.php"); ?>
<?php
		
            $iduser = $_GET['id'];
            
            $id = $_SESSION['userid'];
            $user = $_SESSION['user'];

			$memberinfo = "Select * from member WHERE (id ='$iduser')";
            $memberinfo2 = $mysqli -> query($memberinfo);
            $memberinfo3 = mysqli_fetch_array($memberinfo2);
            
            if ($iduser != $id)
            {

                
		if(isset($_POST['plus']))
			{
		$punktejetzt = $memberinfo3['punkte'];
		$punktedann = $punktejetzt + 1;

		$sql = "UPDATE member SET punkte = ".$punktedann." WHERE (id = ".$iduser.")";
		$query = $mysqli->query($sql);

		echo "Successful positive vote!";
		echo '<form action="profile2.php?id=',$iduser,'" method="post">';
    	echo '<input type="submit" name="plus" value="+"></form>';

			}
		else
		{
		echo '<form action="profile2.php?id=',$iduser,'" method="post">';
		echo '<input type="submit" name="plus" value="+"></form>';
		}	

		if(isset($_POST['minus']))
			{
		$punktejetzt = $memberinfo3['punkte'];
		$punktedann = $punktejetzt - 1;
		
		$sql = "UPDATE member SET punkte = ".$punktedann." WHERE (id = ".$iduser.")";
		$query = $mysqli->query($sql);
		
		echo "Successful negative vote!";
		echo '<form action="profile2.php?id=',$iduser,'" method="post">';
    	echo '<input type="submit" name="minus" value="-"></form>';

			}
		else
		{
		echo '<form action="profile2.php?id=',$iduser,'" method="post">';
		echo '<input type="submit" name="minus" value="-"></form>';
		}	

            }
                
    
			$memberinfo = "Select * from member WHERE (id ='$iduser')";
            $memberinfo2 = $mysqli -> query($memberinfo);
            $memberinfo3 = mysqli_fetch_array($memberinfo2);

        
            
            echo "User id: ", $iduser, "<br>";
            echo "Username: ", $memberinfo3['username'], "<br>";
            echo "Points: ",$memberinfo3['punkte'], "</b><br>";
            
   
?>
        

            
<?php include ("bottom.php"); ?>
        