<?php include "connect.php";?>
<?php include "top.php";?>
        <?php

$memberinfo = "Select * from member";
$memberinfo2 = $mysqli->query($memberinfo);

if ($memberinfo2->num_rows > 0) {
    $memberinfo3 = mysqli_fetch_array($memberinfo2);
}

if (isset($_POST['register'])) {
    $usernamereg = $_POST['username'];
    $passwordreg = $_POST['password'];
    $emailreg = $_POST['mailadress'];

    $passwort = $_POST['password'];
    $hashedPW = md5($passwort);
    $query = "INSERT INTO `member` (username, password, email) VALUES ('" . $usernamereg . "', '" . $hashedPW . "', '" . $emailreg . "')";
    $result = $mysqli->query($query);

    echo "The user ", $usernamereg, " was registered successfully!";
} else {
    echo 'Please do not enter sensitive data. The data is only encrypted with weak security.';
    echo '<form action="register.php" method="post">Fill all fields to register.<br>Username:    <input type="text" name="username" value=""><br>Passwort: <input type="password" name="password" value=""><br>e-mail address: <input type="text" name="mailadress" value=""><br><input type="submit" name="register" value="Register"></form>';
}
?>
<?php include "bottom.php";?>