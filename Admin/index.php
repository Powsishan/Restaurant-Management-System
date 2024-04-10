<?php
session_start();
include 'connect.php';
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  if(empty($username) && empty($password)){
    $message = "Please enter the username and password.";
  } elseif(empty($password)){
    $message = "Please enter the password.";
  } elseif(empty($username)){
    $message = "Please enter the username.";
  } else {
    $query = "SELECT * FROM admin WHERE Username='$username'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) == 1){
      $row = mysqli_fetch_assoc($result);
      $dbPassword = $row['Password'];

      if($password == $dbPassword){
        $_SESSION['username'] = $username;
        header('Location: admintest.php');
        exit;
      } else {
        $message = "Invalid password.";
      }
    } else {
      $message = "User doesn't exist.";
    }
  }
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="container">
    <form method="post">
      <h2>Admin Login</h2>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" >
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" >
      </div>
      <div class="form-group">
        <button type="submit" name="submit">Login</button>
      </div>
      
      <?php if (isset($message)): ?>
        <div class="form-group">
          <p class="error-message"><?php echo $message; ?></p>
        </div>
      <?php endif; ?>
    </form>
  </div>
</body>
</html>
