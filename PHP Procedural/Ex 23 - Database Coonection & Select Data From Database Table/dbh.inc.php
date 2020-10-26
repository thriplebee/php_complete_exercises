<?php
    // DB Connection
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $database = "sample1";

    // My SQLi connection using above parameters
    // My SQli is a database extention of php that can access databases.
    // It supports both procedural and oop interfaces
    // But My SQL supports only procedural interface
    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

    if($conn){
        echo "Success!";
    }
?>