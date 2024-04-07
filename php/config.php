<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "micro_challenge_celerates";

    // $conn = mysqli_connect("localhost", "root", "", "micro_challenge_celerates"); 
    $conn = mysqli_connect($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
?>