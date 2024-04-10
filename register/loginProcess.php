<?php
    session_start();
    include "config.php";
    $loginMassage;

    if (isset($_POST["login"])) {
        //check input from user to database
        $email = $_POST["email"];
        $password = $_POST["password"];


        $inputData = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

        $result = $db->query($inputData);

        if (isset($_SESSION["is_login"]) ) {
            header("location: ../index.php");
        }
        
        if ($result -> num_rows > 0) {
            $data = $result->fetch_assoc();
            $name = $data["name"];

            $_SESSION["name"] = $name;
            $_SESSION["email"] = $data["email"];
            $_SESSION["is_login"] = true;

            header("location: ../profil.php");
            exit();
        } else {
            // echo "login failed";
            include "../layout/popUpLoginFailed.html";
            // header("location: login.php");
        }
    }
?>