<?php
    session_start();
    include "config.php";

    if (isset($_POST["signup"])) {
        if (empty($_POST["name"])) {
            die("Name is required");
        }
        
        if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            die("Valid email is required");
        }
        
        if (strlen($_POST["password"]) < 8) {
            die("Password must be at least 8 characters");
        }
        
        if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
            die("Password must contain at least one letter");
        }
        
        if ( ! preg_match("/[0-9]/", $_POST["password"])) {
            die("Password must contain at least one number");
        }

        //send detail to database
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $inputData = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

        if ($db->query($inputData)) {
            $_SESSION["name"] = $name;
            $_SESSION["is_signup"] = true;
            echo "Berhasil";
            header("location: setProfil.php");
            exit();
        } else {
            echo "Data gagal dimasukan";
        }
        $db -> close();
    }

?>