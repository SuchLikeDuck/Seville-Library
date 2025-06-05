<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <a href="index.html" class="back-button">Back</a>
  <div class="container registration-wrapper">
    <h2>User Registration</h2>
    <form action="register_user.php" method="POST">
      <input type="text" name="first_name" placeholder="First Name" required><br>
      <input type="text" name="last_name" placeholder="Last Name" required><br>
      <input type="text" name="suburb" placeholder="Suburb" required><br>
      <input type="text" name="postcode" placeholder="Postcode" required><br>
      <input type="email" name="email" placeholder="Email" required><br>
      <input type="submit" value="Register">
    </form>
  </div>
</body>

</html>
