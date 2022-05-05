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
session_start();
require_once "connect.php";
?>
<?php
$msg = ""; 
if(isset($_POST['submitBtnLogin'])) {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  if($email != "" && $password != "") {
    try {
      $query = "select * from `user` where `email`=:email and `password`=:password";
      $stmt = $connection->prepare($query);
      $stmt->bindParam('email', $email, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
        $_SESSION['sess_user_id']   = $row['id'];
        $_SESSION['sess_email'] = $row['email'];
       
      } else {
        $msg = "Invalid username and password!";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    $msg = "Both fields are required!";
  }
}
?>

<form method="post">
  <table class="loginTable">
     <tr>
      <th>ADMIN PANEL LOGIN</th>
     </tr>
     <tr>
      <td>
        <label class="firstLabel">Email:</label>
        <input type="text" name="email" id="email" value="" autocomplete="off" />
      </td>
     </tr>
     <tr>
      <td><label>Password:</label>
        <input type="password" name="password" id="password" value="" autocomplete="off" /></td>
     </tr>
     <tr>
      <td>
         <input type="submit" name="submitBtnLogin" id="submitBtnLogin" value="Se connecter" />
         <span class="loginMsg"><?php echo @$msg;?></span>
      </td>
     </tr>
  </table>
</form>
</body>
</html>