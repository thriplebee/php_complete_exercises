<?php
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $database = "sample1";

    // Create mysqli connection
    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

    if(!$conn){
        die("Connection Failed!".mysqli_connect_error());
    }
?>