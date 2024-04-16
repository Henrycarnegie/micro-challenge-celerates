<?php
    session_start();
    include "config.php";

    if(isset($_POST["setProfil"])) {
        $age = $_POST["age"];
        
        // Pemeriksaan gender
        $gender = isset($_POST["gender"]) && $_POST["gender"] == "checked" ? "perempuan" : "laki-laki";

        // Escape $_SESSION["name"] untuk menghindari SQL injection
        $name = $db->real_escape_string($_SESSION["name"]);

        // Query SQL
        $updateData = "UPDATE users SET age = '$age', gender = '$gender' WHERE name = '$name'";

        if ($db->query($updateData)) {
            echo "Berhasil";
            header("location: login.php");
            exit();
        } else {
            echo "Data gagal dimasukan";
        }

        $db->close();
    }
?>
