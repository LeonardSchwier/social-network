<?php session_start();?>
<?php include "connect.php";?>
<?php include "top.php";?>
<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashedPW = md5($password);

    $query = "SELECT * FROM member WHERE (username = '" . $username . "') AND (password='" . $hashedPW . "')";

    $result = $mysqli->query($query);

    $numrows = $result->num_rows;

    if ($numrows == 1) {

        $row = mysqli_fetch_array($result);
        $dbid = $row['id'];
        $dbuser = $row['username'];
        $dbpassword = $row['password'];
        $dbactive = $row['active'];

        $_SESSION['user'] = $dbuser;
        $_SESSION['userid'] = $dbid;

        if ($dbactive == 1) {
            echo "Hello, <b>" . $_SESSION['user'] . "</b>. You logged in successfully.";
        } else {
            echo "Your account is not yet activated. Please go to your profile and activate it.";
        }
    } else {
        echo "Wrong credentials";
    }
} else {
    echo '<form action="login.php" method="post">';
    echo 'Please fill all fields to login.<br>';
    echo 'Username: <input type="text" name="username"><br>';
    echo 'Password: <input type="password" name="password"><br>';
    echo '<input type="submit" name="login" value="Log in">';
    echo '</form>';
}

?>
<?php include "bottom.php";
