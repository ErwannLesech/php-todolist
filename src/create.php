<?php
    $title = $_POST['title'];

    include 'db.php';
    
    // Check if the title is empty
    if(empty($title)){
        echo "Title is required.";
        exit();
    }

    $sql = "INSERT INTO todos (title) VALUES ('$title')";

    // Execute the query and check for errors
    if (mysqli_query($conn, $sql)) {
        header("Location: ./index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
?>
