<?php
require_once '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $Ba_se ?>/assets/css/admin/adminlogin.css ">
  <title>Document</title>
</head>
<body>
<form action="<?= $Ba_se; ?>/admin/index.php" method="POST">

<div class="login-box">
  
  <h1>Login Admin</h1>
  <input type="hidden" name="token">
  <div class="textbox">
    <i class="fa fa-user" aria-hidden="true"></i>
    <input type="email" placeholder="Email" name="email" value="">
  </div>

  <div class="textbox">
    <i class="fa fa-lock" aria-hidden="true"></i>
    <input type="password" placeholder="Password" name="password" value="">
  </div>

  <input class="button" type="submit" name="login" value="Sign In">
</div>
</form>
</body>
</html>