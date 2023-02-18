<?php

// Include the database connection file
require_once('db_connect.php');

// Get the username of the account to be deleted from the session
session_start();
$user = $_SESSION['username'];


// Prepare and bind the update query
$sql = "DELETE FROM users WHERE username = '$user'";

 if ($conn->query($sql) === TRUE) {
        // If the update was successful, display a success message
        echo "<script>alert('Account deleted successfully')</script>";
    echo "<script>setTimeout(function() {window.location.href = 'signup.php';}, 500);</script>";
        
    } else {
        // If there was an error, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

// Close the connection
$conn->close();
?>
