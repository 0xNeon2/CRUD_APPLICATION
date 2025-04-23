<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create User</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h2>Add New User</h2>

  <form method="post">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" name="name" required>
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" name="email" required>
    </div>
    <button type="submit">Create</button>
    <a href="index.php" class="btn">Back</a>
  </form>
</div>

</body>
</html>
