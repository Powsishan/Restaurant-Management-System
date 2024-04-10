<?php
session_start();
// Check if the user is not logged in (username session variable is not set)
if (!isset($_SESSION['username'])) {
  // Redirect the user back to the login page
  header('Location: staflogin.php');
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Staff Dashboard</title>
  <link rel="stylesheet" href="staffpanel.css">
</head>
<body>
  <div class="dashboard">
    <h1>Signature Cuisine staff Panel</h1>
    
    <div class="widget-container">
      <a href="displayquery.php" class="widget">
        <img src="query.svg" alt="Customer Queries">
        <h2>Customer Queries</h2>
        <p>You can manage your Customer Queries.</p>
      </a>
      
      <a href="displayreservation.php" class="widget">
        <img src="reservation.svg" alt="Manage Reservation">
        <h2>Manage Reservation</h2>
        <p>You can manage your restaurant table reservations.</p>
      </a>
      
      <a href="displayfood.php" class="widget">
        <img src="order.svg" alt="Manage Orders">
        <h2>Manage Orders</h2>
        <p>You can manage your restaurant food orders.</p>
      </a>
      
      <a href="/test/Admin/Signature/index.html" class="widget">
        <img src="web.svg" alt="Go to Your Website">
        <h2>Go to Your Website</h2>
        <p>Go to your Signature Cuisine Restaurant website.</p>
      </a>
    </div>
    
    <div class="logout-box">
      <a href="staflogout.php" class="logout">Logout</a>
    </div>
  </div>
</body>
</html>