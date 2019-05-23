
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Session cockies 1</title>
</head>
<body>
<h3>Sida 1</h3>
<a href="index2.php">Till sidan 2</a>
<?php
echo $_SESSION['a'];
$_SESSION['a'] = "Värde från index1.php";
?>
</body>
</html>
