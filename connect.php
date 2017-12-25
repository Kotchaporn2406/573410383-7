<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "my_diary";

$mysqli = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($mysqli, "utf8");
?>