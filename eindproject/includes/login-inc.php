<?php

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once "db-connect.php";
    require_once "functions.php";

    if (emptyInputLogin($email, $password) !== false) {
        header("location: ../pages/login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $password);
} else {
    header("location: ../pages/login.php");
    exit();
}
