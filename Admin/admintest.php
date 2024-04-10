<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="admintest.css">
</head>
<body>
  <div class="dashboard">
    <h1>Signature cuisine Admin panel </h1>
    
    <div class="widget-container">
      <a href="displayuser.php" class="widget">
        <img src="person.svg" alt="Manage Users">
        <h2>Manage Users</h2>
        <p>You can manage your staff and users.</p>
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
      
      <a href="displayquery.php" class="widget">
        <img src="query.svg" alt="Customer Queries ">
        <h2>Customer Queries</h2>
        <p>You can manage your restaurant Queries.</p>
      </a>
      
      <a href="/test/Admin/Signature/index.html" class="widget">
        <img src="web.svg" alt="Go to Your Website">
        <h2>Go to Your Website</h2>
        <p>Go to your Signature Cuisine Restaurant website.</p>
      </a>
    

    <a href="registration.php" class="widget">
      <img src="admin.svg" alt="Add Admin">
      <h2>Add Admin</h2>
      <p>You can add new administrators here.</p>
    </a>
  </div>

   

    <div class="logout-box">
      <a href="logout.php" class="logout">Logout</a>
    </div>
  </div>
</body>
</html>
