<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordconfirm = $_POST["password-confirm"];

    require_once "db-connect.php";
    require_once "functions.php";

    if (emptyInputSignup($username, $email, $password, $passwordconfirm) !== false) {
        header("location: ../pages/signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../pages/signup.php?error=invalidusername");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../pages/signup.php?error=invalidemail");
        exit();
    }
    if (passwordConfirm($password, $passwordconfirm) !== false) {
        header("location: ../pages/signup.php?error=passwordnotmatching");
        exit();
    }
    if (usernameExists($conn, $username, $email) !== false) {
        header("location: ../pages/signup.php?error=userexists");
        exit();
    }

    createUser($conn, $username, $email, $password);
} else {
    header("location: ../index.php");
}
