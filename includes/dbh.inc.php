<!-- Database handler - for any data to the database or to call any data/write -->

<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "register-login-php";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}