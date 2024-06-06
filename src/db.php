<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "todolist";

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if (!$conn) {
        //echo "Connection failed to db\n"; // Missing semicolon added here
    } else {
        //echo "Connection successful to db\n"; // Missing semicolon added here
    }
?>