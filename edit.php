<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<style>
		h1 {
			text-align: center;
			font-size: 32px;
			margin-top: 50px;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		label {
			font-size: 20px;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="password"] {
			padding: 10px;
			font-size: 16px;
			margin-bottom: 20px;
			border: 2px solid #ccc;
			border-radius: 4px;
			width: 300px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			width: 150px;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<h1>Edit Profile</h1>

	<?php
	// Include the database connection file
require_once('db_connect.php');

	

	session_start();
	$user = $_SESSION['username'];

	// Retrieve data from the database
	$sql = "SELECT * FROM users WHERE username = '$user'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    $row = $result->fetch_assoc();
	} else {
	    echo "No results found";
	    exit();
	}

	// Display the data in an editable form
	echo '<form action="update.php" method="post">';
	echo '<label for="name">Username:</label> <input type="text" name="name" value="' . $row['username'] . '">';
	echo '<label for="email">Email:</label> <input type="text" name="email" value="' . $row['email'] . '">';
	echo '<label for="phone">Phone:</label> <input type="text" name="phone" value="' . $row['phone'] . '">';
	echo '<label for="password">Password:</label> <input type="password" name="password" value="' . $row['password'] . '">';
	echo '<input type="submit" value="Update">';
	echo '</form>';

	// Close the database connection
	$conn->close();
	?>
</body>
</html>
