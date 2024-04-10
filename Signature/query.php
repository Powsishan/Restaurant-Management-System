<?php
include 'connect.php'; 
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $sql = "INSERT INTO displayq (Name, Email, Note) VALUES ('$name', '$email', '$message')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    // Query successfully inserted into the database
  } else {
    // Error occurred while inserting the query
    echo "Error: " . mysqli_error($con);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Query Page</title>
  <link rel="stylesheet" href="query.css">
</head>
<body>
  <div class="container">
    <h2>Need Help</h2>
    <form method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <input type="text" id="message" name="message" required>
      </div>
      <?php if (isset($result)): ?>
        <div class="form-group">
          <p class="error-message"><?php echo "Query sent successfully."; ?></p>
        </div>
      <?php endif; ?>
      <div class="form-group">
        <button type="submit" name="submit">Submit Query</button>
      </div>
    </form>
  </div>
</body>
</html>
