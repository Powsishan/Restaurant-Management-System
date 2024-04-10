<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $numberofguest = $_POST['numberofguest'];
  $specialrequest = $_POST['specialrequest'];
  $sql = "INSERT INTO rtable (Name, Email, Phonenumber, Date, Time, Numberofguest, `specialRequest`) 
        VALUES ('$name', '$email', '$phonenumber', '$date', '$time', $numberofguest, '$specialrequest')";

  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location: reservation.php');
  } else {
    die(mysqli_error($con));
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Table Reservation</title>
  <link rel="stylesheet" href="reservation.css">
</head>
<body>
  <div class="container">
    <h2>Table Reservation</h2>
    <form method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phonenumber">Phone Number</label>
        <input type="text" id="phonenumber" name="phonenumber" required>
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="time">Time</label>
        <input type="time" id="time" name="time" required>
      </div>
      <div class="form-group">
        <label for="numberofguest">Number of Guests</label>
        <input type="number" id="numberofguest" name="numberofguest" min="1" required>
      </div>
      <div class="form-group">
        <label for="specialrequest">Special Requests</label>
        <textarea id="specialrequest" name="specialrequest"></textarea>
      </div>
      
      <div class="form-group">
        <button type="submit" name="submit">Submit Reservation</button>
      </div>

      <?php if (isset($result)): ?>
        <div class="form-group">
          <p class="error-message"><?php echo "Table reserved ."; ?></p>
        </div>
      <?php endif; ?>
    </form>
  </div>
</body>
</html>
