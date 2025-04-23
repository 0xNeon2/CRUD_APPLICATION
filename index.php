<!-- <?php include 'db.php'; ?>
<h2>Users</h2>
<a href="create.php">Add New</a>
<table border="1">
  <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
  <?php
    $result = $conn->query("SELECT * FROM users");
    while($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>
          <a href='edit.php?id={$row['id']}'>Edit</a>
          <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
      </tr>";
    }
  ?>
</table> -->

<?php
include 'db.php';
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP CRUD App</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h2>PHP CRUD Application</h2>

  <a href="create.php" class="btn">Add New User</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['id']; ?></td>
          <td><?= $row['name']; ?></td>
          <td><?= $row['email']; ?></td>
          <td class="actions">
            <a class="btn" href="edit.php?id=<?= $row['id']; ?>">Edit</a>
            <a class="btn" href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>

</body>
</html>

