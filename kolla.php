
<?php
session_start();


?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Kollar...</title>
   </head>
   <body>



      <?php

$username = $_POST['username'];
$password = $_POST['password'];
include_once "settings.php";
echo $username;
      try {
           $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);

           $stmt = $db->query("SELECT  username, password FROM tb_medlemmar WHERE username='$username' AND password='$password'");

           if ($row = $stmt->fetch()) {

              $val = "sant";

              $_SESSION['inloggad'] = "sant";
         }
         else {

          $val = "Falskt";
          echo " = Fel användarnamn eller lösenord";
          exit();
         }

       } catch (PDOException $e) {
         echo 'Connection failed: ' . $e->getMessage();
        }

         ?>
         <form action="visa.php" method="post">

           <input type="hidden" name="val" value="<?php echo $val; ?>">
           <input type="submit" value="vidare">
         </form>

   </body>
   </html>
