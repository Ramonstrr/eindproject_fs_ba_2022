<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "eindproject";

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("failed to connect! " . mysqli_connect_error());
}
