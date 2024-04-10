<?php
include 'connect.php'; 
// Search functionality
$searchQuery = "";
if (isset($_POST['search'])) {
  $searchQuery = $_POST['searchQuery'];
  $query = "SELECT * FROM displayq WHERE Name LIKE '%$searchQuery%' OR Email LIKE '%$searchQuery%' OR Note LIKE '%$searchQuery%'";
} else {
  $query = "SELECT * FROM displayq";
}

// Execute the query
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html>
<head>
  <title>User queries</title>
  <link rel="stylesheet" type="text/css" href="displayuser.css">
</head>
<body>
<div class="container">
    <h2><a href="display.php" class="heading-link">User queries</a></h2>
    <div class="header">
      <div class="button-container">
        <button class="home-button"><a href="staffpanel.php">Home</a></button>
      </div>
      <form method="POST" class="search-container">
      <input type="text"  id="search-input" name="searchQuery" placeholder="Search..." value="<?php echo $searchQuery; ?>">
      <button type="submit" id="search-button" name="search">Search</button>
      </form>
    </div>

    <table class="user-table">
  <tr>
    <th> No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Note</th>
    <th>Action</th>
  </tr>

  <?php
  // Check if there are any rows returned
  if ($result && mysqli_num_rows($result) > 0) {
    // Loop through each row and display the data
    while ($row = mysqli_fetch_assoc($result)) {
      $ID = $row['No'];
      $Name = $row['Name'];
      $Email = $row['Email'];
      $Note = $row['Note'];

      echo '<tr>
         <td> ' . $ID . '</td>
         <td> ' . $Name . '</td>
         <td> ' . $Email . '</td>
         <td> ' . $Note . '</td>
         <td>
           <button class="edit-button"><a href="reply.php?replyid=' . $ID . '">Reply</a></button>
        </td>
        </tr>';

    }
  } else {
    echo "<tr><td colspan='7'>No data available</td></tr>";
  }

  mysqli_close($con);
  ?>

</table>
  </div>
</body>
</html>
