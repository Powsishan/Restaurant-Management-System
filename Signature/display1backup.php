<?php
include'connect.php';

$search = '';

// Check if search form is submitted
if (isset($_POST['submit-search'])) {
  $search = $_POST['search-input'];
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>User Management</title>
  <link rel="stylesheet" type="text/css" href="display.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <h2>User Management</h2>
      <form method="POST" class="search-container">
        <input type="text" id="search-input" name="search-input" placeholder="Search..." value="<?php echo $search; ?>">
        <button type="submit" id="search-button" name="submit-search">Search</button>
      </form>
    </div>

    <button class="add-button">
      <span class="label"><a href="cuser.php">Add User</a></span>
      <span class="icon"></span>
    </button>
    
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

      
       // Query to retrieve data from the staff table based on search
      $query = "SELECT * FROM staf WHERE firstName LIKE '%$search%' OR lastName LIKE '%$search%' OR userName LIKE '%$search%' OR eMail LIKE '%$search%'";

        
        // Query to retrieve data from the staff table
        $query = "SELECT * FROM staf";
        
        // Execute the query
        $result = mysqli_query($con, $query);
        
        // Check if there are any rows returned
        if ($result && mysqli_num_rows($result) > 0) {
          // Loop through each row and display the data
          while ($row = mysqli_fetch_assoc($result)) {

            $ID=$row['stafID'];
            $fname=$row['firstName'];
            $lname=$row['lastName'];
            $uname=$row['userName'];
            $email=$row['eMail'];
            $password=$row['password'];

            echo '<tr>
             <td> '.$ID.'</td>
             <td> '.$fname.'</td>
             <td> '.$lname.'</td>
             <td> '.$uname.'</td>
             <td> '.$email.'</td>
            <td> '.$password.'</td>
            <td>
            <button class="edit-button"><a href="update.php?
            updateid='.$ID.'">Edit</a></button>
            <button class="delete-button"><a href="delete.php?
            deleteid='.$ID.'">Delete</a></button>
            </td>
            </tr>';

            // echo "<tr>";
            // echo "<td>" . $row['stafID'] . "</td>";
            // echo "<td>" . $row['firstName'] . "</td>";
            // echo "<td>" . $row['lastName'] . "</td>";
            // echo "<td>" . $row['userName'] . "</td>";
            // echo "<td>" . $row['eMail'] . "</td>";
            // echo "<td>" . $row['password'] . "</td>";
            // echo "<td>";
            // echo "<a href='user.html' class='edit-button'>Edit</a>";
            // echo "<a href='delete.php' class='delete-button'>Delete</a>";
            // echo "</td>";
            // echo "</tr>";
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
