<?php
include 'connect.php';

// Search functionality
$searchQuery = "";
if (isset($_POST['search'])) {
  $searchQuery = $_POST['searchQuery'];
  $query = "SELECT * FROM food WHERE Orderid LIKE '%$searchQuery%' OR Food LIKE '%$searchQuery%'";
} else {
  $query = "SELECT * FROM food";
}

// Execute the query
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Food Orders</title>
  <link rel="stylesheet" href="displayfood.css">
</head>
<body>
  <div class="container">

  <h2><a href="displayfood.php" class="heading-link">Food Orders</a> </h2>

  
    <form method="POST" class="search-form">
    <a href="admintest.php" class="home-button">Home</a>

      <input type="text" name="searchQuery" placeholder="Search..." value="<?php echo $searchQuery; ?>">
      <button type="submit" name="search">Search</button>

    </form>

    <table class="food-orders-table">
      <tr>
        <th>Order ID</th>
        <th>Food</th>
        <th>Quantity</th>
      </tr>
      
      <?php
      // Check if there are any rows returned
      if (mysqli_num_rows($result) > 0) {
        // Loop through each row and display the data
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['Orderid'] . "</td>";
          echo "<td>" . $row['Food'] . "</td>";
          echo "<td>" . $row['quantity'] . "</td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='3'>No food orders available</td></tr>";
      }
      ?>
      
    </table>
  </div>
</body>
</html>
