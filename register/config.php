<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "micro_challenge_celerates";

    $mysqli = mysqli_connect($host, $username, $password, $database);

    if ($mysqli->connect_errno) {
        die("mysqliection failed: " . $mysqli->connect_error);
    }
    return $mysqli;

?>