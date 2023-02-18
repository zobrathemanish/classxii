<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Sign Up</h1>
    <form action="connect_insert.php" id="signup-form" method="post">
  <label for="username">Username:</label>
  <input type="text" id="uname" name="user" required>
  <br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
  <br>
  <label for="phone">Phone Number:</label>
  <input type="text" id="phone" name="phone" required>
  <br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="pass" required>
  <br>
  <label for="passwordConfirm">Confirm Password:</label>
  <input type="password" id="passwordConfirm" required>
  <br>
  <input type="submit" id="signup-button" value="Sign Up" name="signup">
  <script src="validate.js"></script>
</form>
    <div class="signin-link">
      Already have an account? <a href="login.php">Sign In</a>
    </div>
  </div>
  </body>
</html>
