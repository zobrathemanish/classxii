<?php

// Include the database connection file
require_once('db_connect.php');


$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $user;
    header('Location: home.php');
} else {
    echo "<script>alert('User does not exist. Please login again')</script>";
    echo "<script>setTimeout(function() {window.location.href = 'login.php';}, 500);</script>";
}

$conn->close();
?>
