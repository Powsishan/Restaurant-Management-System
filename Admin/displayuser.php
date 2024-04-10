<?php
include 'connect.php';
$search = '';
if (isset($_POST['submit-search'])) {
  $search = $_POST['search-input'];
  $query = "SELECT * FROM staf WHERE firstName LIKE '%$search%' OR lastName LIKE '%$search%' OR userName LIKE '%$search%' OR eMail LIKE '%$search%' OR stafID LIKE '%$search%'";
} else {
  $query = "SELECT * FROM staf";
}
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Management</title>
  <link rel="stylesheet" type="text/css" href="displayuser.css">
</head>
<body>
<div class="container">
    <h2><a href="display.php" class="heading-link">User Management</a></h2>
    <div class="header">
      <div class="button-container">
        <button class="home-button"><a href="admintest.php">Home</a></button>
        <button class="add-button">
          <span class="label"><a href="cuser.php">Add User</a></span>
        </button>
      </div>
      <form method="POST" class="search-container">
        <input type="text" id="search-input" name="search-input" placeholder="Search..." value="<?php echo $search; ?>">
        <button type="submit" id="search-button" name="submit-search">Search</button>
      </form>
    </div>
    <table class="user-table">
      <tr>
        <th>Staf Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
      <?php
      // Check if there are any rows returned
      if ($result && mysqli_num_rows($result) > 0) {
        // Loop through each row and display the data
        while ($row = mysqli_fetch_assoc($result)) {
          $ID = $row['stafID'];
          $fname = $row['firstName'];
          $lname = $row['lastName'];
          $uname = $row['userName'];
          $email = $row['eMail'];
          $password = $row['password'];

          echo '<tr>
             <td> ' . $ID . '</td>
             <td> ' . $fname . '</td>
             <td> ' . $lname . '</td>
             <td> ' . $uname . '</td>
             <td> ' . $email . '</td>
             <td> ' . $password . '</td>
             <td>
             <button class="edit-button"><a href="update.php?
             updateid='.$ID.'">Edit</a></button>
             <button class="delete-button"><a href="delete.php?
             deleteid='.$ID.'">Delete</a></button>
            </td>
            </tr>';
        }
      } else {
        echo "<tr><td colspan='6'>No data available</td></tr>";
      }

      mysqli_close($con);
      ?>

    </table>
  </div>
</body>
</html>
