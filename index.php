<?php
session_start();

// Check if user is authenticated.
// If not, send them to login.php using header()...
if (!isset($_SESSION['authenticated'])) {
  header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pushpak Roy</title>
  </head>

  <body>

      <h1>Assignment 1</h1>

      <p> Welcome, <?=$_SESSION['username'] ?></p> 

      <?php echo "Today is " . date("l, F j, Y") . "."?>

  </body>


  <footer>
    <p><a href="/logout.php"> Click here to logout </a></p>
  </footer>
</html>