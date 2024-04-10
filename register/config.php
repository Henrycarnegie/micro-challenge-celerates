<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "micro_challenge_celerates";

    $db = mysqli_connect($host, $username, $password, $database);

    if ($db->connect_error) {
        echo "Koneksi Database Gagal!!";
        die("Database error failed: " . $mysqli->connect_error);
    }

?>