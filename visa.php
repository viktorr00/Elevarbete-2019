<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Hemlig sida</title>
</head>
<body>
<h3>Hemlig sida</h3>

<?php
$inloggad = $_SESSION['inloggad'];

if ($inloggad=="sant")
{
  echo "Välkommen till den hemliga sidan!<br>";
}
else {
  echo "Förbjudet!<br>";
}
?>
</body>
</html>
