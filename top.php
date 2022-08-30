<html>
    <head>
        <title>the social network</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>

        <div id="banner">
        <h1>
    the social network
        </h1>
    </div>
<div id="wrapper">
        <div id="banner">
        </div>
        <div id="nav">
         <table border="0px" cellpadding="5px" cellspacing="5px" align="center">
        <tr>

            <td>
            <a href="index.php">Home</a>
            </td>

            <td>
            <a href="member.php">Members</a>
            </td>

            <?php

if (isset($_SESSION['user'])) {
    echo '<td><a href="profile.php">My profile</a></td>';
    echo '<td><a href="logout.php">Log out, ' . $_SESSION['user'] . '</a></td>';
} else {
    echo '<td><a href="register.php">Register</a></td>';
    echo '<td><a href="login.php">Log in</a></td>';
}

?>
        </tr>
        </table>
        </div>
        <div id="content">