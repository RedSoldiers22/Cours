<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
require_once "connect.php";
?>
  <form action="verif.php" method="post">
    <p>Email : <input type="text" name="email"></p>
    <p>Mot de passe : <input type="password" name="password"></p>
    <input type="submit" value="OK">

      

  </form>
</body>
</html>