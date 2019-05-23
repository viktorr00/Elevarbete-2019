

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Session cockies 2</title>
</head>
<body>
  <h3>Sida 2</h3>
  <a href="index1.php">Till sidan 1</a>
  <?php
    echo $_SESSION['a'];
    $_SESSION['a'] = "Värde från index2.php";
  ?>
</body>
</html>
