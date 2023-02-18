<?php

// Include the database connection file
require_once('db_connect.php');

$user = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['password'];


// Prepare and bind the update query
$sql = "UPDATE users SET username='$user', email = '$email', phone = '$phone' WHERE username = '$user'";

 if ($conn->query($sql) === TRUE) {
        // If the update was successful, display a success message
         echo "<script>alert('New Record Updated Successfully')</script>";
    echo "<script>setTimeout(function() {window.location.href = 'home.php';}, 500);</script>";

        
    } else {
        // If there was an error, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

// Close the connection
$conn->close();
?>
