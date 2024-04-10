<?php
include 'connect.php';

if (isset($_POST['submit'])) {
  $stafID = $_POST['stafid'];
  $firstName = $_POST['firstname'];
  $lastName = $_POST['lastname'];
  $userName = $_POST['username'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirm-password'];
  $eMail = $_POST['email'];

  if (empty($firstName) || empty($lastName) || empty($userName) || empty($password) || empty($confirmPassword) || empty($eMail)) {
    $message = "Please fill in all the fields.";
  } elseif ($password !== $confirmPassword) {
    $message = "Passwords do not match.";
  } else {
    

    // Use mysqli_real_escape_string for input validation
    $stafID = mysqli_real_escape_string($con, $stafID);
    $firstName = mysqli_real_escape_string($con, $firstName);
    $lastName = mysqli_real_escape_string($con, $lastName);
    $userName = mysqli_real_escape_string($con, $userName);
    $password = mysqli_real_escape_string($con, $password);
    $eMail = mysqli_real_escape_string($con, $eMail);

    $sql = "INSERT INTO staf (stafid, firstname, lastname, username, password, email) 
            VALUES ('$stafID', '$firstName', '$lastName', '$userName', '$password', '$eMail')";
    $result = mysqli_query($con, $sql);

    if ($result) {
      // Data inserted successfully
      header('location: displayuser.php');
      exit;
    } else {
      $message = "Error: " . mysqli_error($con);
    }
  }
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Create User</title>
  <link rel="stylesheet" href="createUser.css">
</head>
<body>
  <div class="container">
    <h2>Create User</h2>
    <form method="post">

    <div class="form-group">
            <label for="stafid">Staf id</label>
            <input type="text" id="stafid" name="stafid" required>
          </div>
        <div class="form-group">
            <label for="firstname">First name</label>
            <input type="text" id="firstname" name="firstname" required>
          </div>
          <div class="form-group">
            <label for="lastname">Last name</label>
            <input type="text" id="lastname" name="lastname" required>
          </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
      </div>
      <div class="form-group">
        <button type="submit" name="submit">Create User</button>
      </div>
    </form>
  </div>
</body>
</html>
