<?php

//validate name
if (empty($_POST["name"])) {
    die("name is required");
}

//validate email
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("email is not validate");
}

//validate password
if (strlen($_POST["password"]) < 8) {
    die("password must be at least 8 characters");
} elseif ((strlen($_POST["password"]) > 8) && (!preg_match("/[1-9]/i", $_POST["password"]))) {
    die("password must contain at least 1 number");
} elseif ((strlen($_POST["password"]) > 8) && (!preg_match("/[a-z]/i", $_POST["password"]))) {
    die("password must contain at least 1 letter");
}

//hashed password
$password_hash =  password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "config.php";
$sql = "INSERT INTO users (name, email, password)
        VALUES (?, ?, ?)";
$stmt = $mysqli->stmt_init();

print_r($_POST);
var_dump($password_hash);
