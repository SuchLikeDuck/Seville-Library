<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "seville_library");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$suburb = $_POST['suburb'];
$postcode = $_POST['postcode'];
$email = $_POST['email'];

$sql = "INSERT INTO users (first_name, last_name, suburb, postcode, email)
        VALUES ('$first_name', '$last_name', '$suburb', '$postcode', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "<script>
          alert('Registration successful!');
          window.location.href = 'index.html';
        </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
