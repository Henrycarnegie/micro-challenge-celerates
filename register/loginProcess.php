<?php
    session_start();
    include "config.php";

    if (isset($_POST["login"])) {
        //check input from user to database
        $email = $_POST["email"];
        $password = $_POST["password"];

        $inputData = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

        $result = $db->query($inputData);

        if ($result->num_rows > 0) {
            

            $_SESSION["name"] = $name;
            $_SESSION["email"] = $data["email"];
            $_SESSION["is_login"] = true;
            $_SESSION["login_failed"] = false;

            header("location: ../profil.php");
            exit();
            $db->close();
        } else {
            $db->close();
            $_SESSION["is_login"] = false;
            $_SESSION["login_failed"] =true;
            header("location: login.php");
        }
        
    }
?>
