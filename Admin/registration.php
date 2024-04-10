<?php
include 'connect.php'; 
$message = '';
if(isset($_POST['register'])){
  $firstName = $_POST['firstname'];
  $lastName = $_POST['lastname'];
  $userName = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $sql = "INSERT INTO admin (Firstname, Lastname, Username, Email, Password) 
          VALUES ('$firstName', '$lastName', '$userName', '$email', '$password')";
  $result = mysqli_query($con, $sql);
  if($result){
    $message = "Successfully registered!";
  }else{
    $message = "Registration failed.";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" href="registration.css">
</head>
<body>
  <div class="container">
    <form method="post">
      <h2>Registration</h2>
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
        <button type="submit" name="register">Register</button>
      </div>
      
    </form>
  </div>
</body>
</html>
