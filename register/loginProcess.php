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
            $data = $result->fetch_assoc();
            $_SESSION["name"] = $data["name"];
            $_SESSION["email"] = $data["email"];
            $_SESSION["is_login"] = true;

            header("location: ../profil.php");
            exit();
            $db->close();
            $_POST["login"] = true;
        } else {
            $db->close();
            $_SESSION["is_login"] = false;
            header("location: login.php");
        }
    }
?>
