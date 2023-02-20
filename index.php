
<?php

// MySQL database configuration
$servername = "localhost"; // Replace with your servername
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password

// Create a connection to MySQL server
$conn = new mysqli($servername, $username, $password);

// Check for connection errors
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create a new database named "classxii"
$sql = "CREATE DATABASE classxii";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// Select the "classxii" database
$conn->select_db("classxii");

// Create a new table named "users"
$sql = "CREATE TABLE users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  phone bigint(11) NOT NULL,
  password VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();

header('Location: login.php');

?>


