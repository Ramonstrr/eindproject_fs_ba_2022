<?php

function emptyInputSignup($username, $email, $password, $passwordconfirm)
{
    $result;
    if (empty($username) || empty($email) || empty($password) || empty($passwordconfirm)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username)
{
    $result;
    if (!preg_match('/^[a-zA-Z0-9]*/', $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidAge($age)
{
    $result;
    if (!is_int($age)) {
        $result = true;
    } else {
        $result = false;
    } return $result;
}

function passwordConfirm($password, $passwordconfirm)
{
    $result;
    if ($password !== $passwordconfirm) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function usernameExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE userName = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $password)
{
    $sql = "INSERT INTO users (userName, userEmail, userPassword) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../pages/signup.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../pages/signup.php?error=none");
    exit();
}

function emptyInputLogin($email, $password)
{
    $result;
    if (empty($email) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $password)
{
    $userExists = usernameExists($conn, $username, $email);
    if ($userExists === false) {
        header("location: ../pages/login.php?error=wronglogin");
        exit();
    }

    $hashedPassword = $userExists["userPassword"];
    $checkPassword = password_verify($password, $hashedPassword);

    if ($checkPassword === false) {
        header("location: ../pages/login.php?error=wronglogin");
        exit();
    } else if ($checkPassword === true) {
        session_start();
        $_SESSION["userID"] = $userExists["userID"];
        $_SESSION["userEmail"] = $userExists["$email"];
        header("location: ../pages/profile.php");
        exit();
    }
}
