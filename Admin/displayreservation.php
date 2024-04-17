<?php
include 'connect.php'; 
$searchQuery = "";
if (isset($_POST['search'])) {
  $searchQuery = $_POST['searchQuery'];
  $query = "SELECT * FROM rtable WHERE Name LIKE '%$searchQuery%' OR Email LIKE '%$searchQuery%' OR `specialRequest` LIKE '%$searchQuery%'";
} else {
  $query = "SELECT * FROM rtable";
}

$result = mysqli_query($con, $query);

// Check for errors
if (!$result) {
    // Query failed, handle the error
    echo "Error: " . mysqli_error($con);
    // You may want to exit here or handle the error differently
    exit;
}


$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Table Reservations</title>
  <link rel="stylesheet" href="displayreservation.css">
</head>
<body>
  <div class="container">
    <h2><a href="displayreservation.php" class="heading-link">Table Reservations</a></h2>
    <form method="POST" class="search-form">
      <a href="admintest.php" class="home-button">Home</a>
      <input type="text" name="searchQuery" placeholder="Search..." value="<?php echo $searchQuery; ?>">
      <button type="submit" name="search">Search</button>
    </form>
    <table class="reservation-table">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Date</th>
        <th>Time</th>
        <th>Number of Guests</th>
        <th>Special Requests</th>
      </tr>
      
      <?php
      // Check if there are any rows returned
      if (mysqli_num_rows($result) > 0) {
        // Loop through each row and display the data
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['Name'] . "</td>";
          echo "<td>" . $row['Email'] . "</td>";
          echo "<td>" . $row['Phonenumber'] . "</td>";
          echo "<td>" . $row['Date'] . "</td>";
          echo "<td>" . date('h:i A', strtotime($row['Time'])) . "</td>";
          echo "<td>" . $row['Numberofguest'] . "</td>";
          echo "<td>" . $row['specialRequest'] . "</td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='7'>No reservations available</td></tr>";
      }
      ?>
      
    </table>
  </div>
</body>
</html>
