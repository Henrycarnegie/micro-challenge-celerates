<?php
    include "config.php";
    include "signupProcess.php";
    session_start();

    if(isset ($_POST["setProfil"])) {
        $age = $_POST["age"];

        if (isset ($_POST["gender"] )) {
            if (isset ($_POST["gender"] ) && !$_POST["gender"] == "checked") {
                $gender = "laki-laki";
                echo "LAKIIII";
                var_dump($_POST["gender"]);
            } 
            if ($_POST["gender"] == "checked") {
                $gender = "perempuan";
                echo "perempuan";
                var_dump($_POST["gender"]);
            }
        }

        $inputData =  "INSERT INTO users (age, gender) VALUES ('$age', '$gender')";
        if ($db->query($inputData)) {
            echo "Berhasil";
            header("location: login.php");
            exit();
        } else {
            echo "Data gagal dimasukan";
        }
        $db -> close();
    }
?>