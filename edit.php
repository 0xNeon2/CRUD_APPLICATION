<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit User</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h2>Edit User</h2>

  <form method="post">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" name="name" value="<?= $row['name']; ?>" required>
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" name="email" value="<?= $row['email']; ?>" required>
    </div>
    <button type="submit">Update</button>
    <a href="index.php" class="btn">Cancel</a>
  </form>
</div>

</body>
</html>
