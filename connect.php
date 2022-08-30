<?php

$db_host = 'localhost';
$db_db = 'social-network';
$db_user = 'root';
$db_pw = 'root';

$mysqli = new mysqli($db_host, $db_user, $db_pw, $db_db);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

?>