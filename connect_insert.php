<?php

// Include the database connection file
require_once('db_connect.php');

// Define the values to be inserted into the table
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$phone = $_POST['phone'];

//This is to prevent from security vulnerability such as SQL injection attacks
$user = mysqli_real_escape_string($conn, $user);
$pass = mysqli_real_escape_string($conn, $pass);
$email = mysqli_real_escape_string($conn, $email);
$phone = mysqli_real_escape_string($conn, $phone);

// Construct the SQL statement to check if the user already exists
$sql = "SELECT * FROM users WHERE username = '$user' OR email = '$email' OR phone = '$phone'";

// Execute the SQL statement
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // If the user already exists, display an error message
    echo "<script>alert('User already exists. Please login')</script>";
    echo "<script>setTimeout(function() {window.location.href = 'login.php';}, 500);</script>";

} else {
    // If the user does not exist, construct the SQL statement to insert the data into the table
    $sql = "INSERT INTO users (username, email, phone, password)
    VALUES ('$user', '$email','$phone','$pass')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        // If the insert was successful, display a success message
        echo "<script>alert('Account created successfully')</script>";
        header('Location: login.php');
    } else {
        // If there was an error, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
