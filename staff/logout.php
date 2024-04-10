<?php
session_start();

// Check if the user is logged in (username session variable is set)
if (isset($_SESSION['username'])) {
  // Destroy the session data, effectively logging out the user
  session_destroy();

  // Redirect the user back to the login page
  header('Location: login.php');
  exit();
} else {
  // If the user is not logged in, redirect to the login page to avoid any confusion
  header('Location: login.php');
  exit();
}
?>
