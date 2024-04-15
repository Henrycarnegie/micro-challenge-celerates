<?php
    session_start();
    include "config.php";
    $name;

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

        $updateData =  "UPDATE users SET age = '$age' AND gender = '$gender' WHERE name = '$name' ";

        if ($db->query($updateData)) {
            echo "Berhasil";
            header("location: login.php");
            exit();
        } else {
            echo "Data gagal dimasukan";
        }
        $db -> close();
    }
?>