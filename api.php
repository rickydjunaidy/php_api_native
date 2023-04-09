<?php

header('Access-Control-Allow-Origin: *');

// LOCAL API ACCESS
// http://localhost/react/api/api.php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "asia_stationery";
    $conn = mysqli_connect($host, $user, $pass, $db);

    // Check connection
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        
    } else {
        echo "Success to connect to MySQL: " . $conn;
    }
    exit();
?>