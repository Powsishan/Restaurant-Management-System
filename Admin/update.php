<?php
include 'connect.php';
$ID=$_GET['updateid']; 
$sql = "SELECT * FROM staf WHERE stafid='".$_GET['updateid']."'";
$result=mysqli_query($con,$sql);
$result = mysqli_query($con, $sql);
if (!$result) {
    die('Query Error: ' . mysqli_error($con));
}

$row=mysqli_fetch_assoc($result); 
$stafID=$row['stafID'];
$fname=$row['firstName'];
$lname=$row['lastName'];
$uname=$row['userName'];
$email=$row['eMail'];
$password=$row['password'];

if(isset($_POST['submit'])){

  $stafID=$_POST['stafid'];
  $firstName=$_POST['firstname'];
  $lastName=$_POST['lastname'];
  $userName=$_POST['username'];
  $password=$_POST['password'];
  $eMail=$_POST['email'];

  $sql="update staf set stafid='$stafID',firstname=' $firstName',
  lastname='$lastName',username='$userName',password=' $password',
  email='$eMail' where  stafid='".$_GET['updateid']."'";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo"Data updated successfully";
     header('location:displayuser.php');
  }else{
    die(mysqli_error($con));
  }

}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Update User</title>
  <link rel="stylesheet" href="createUser.css">
</head>
<body>
  <div class="container">
    <h2>Update User</h2>
    <form method="post">

    <div class="form-group">
            <label for="stafid">Staf id</label>
            <input type="text" id="stafid" name="stafid"  required value=<?php echo $stafID; ?>>
          </div>
        <div class="form-group">
            <label for="firstname">First name</label>
            <input type="text" id="firstname" name="firstname" required value=<?php echo $fname; ?>>
          </div>
          <div class="form-group">
            <label for="lastname">Last name</label>
            <input type="text" id="lastname" name="lastname" required value=<?php echo $lname; ?>>
          </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required value=<?php echo $uname; ?>>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required value=<?php echo $email; ?>>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required value=<?php echo $password; ?>>
      </div>
      <div class="form-group">
        <button type="submit" name="submit">Update</button>
      </div>
    </form>
  </div>
</body>
</html>
