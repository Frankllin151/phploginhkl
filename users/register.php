<?php require_once '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $Ba_se; ?>/users/action_register.php" method="POST">
    <?php
    /// Generate Token 
    $token = openssl_random_pseudo_bytes(16);
              $token = bin2hex($token);

         
        ?>
        <input type="hidden" name="token" value="<?= $token; ?>">
<label for="">
    <p>Usuario</p> <br>
    <input type="text" name="name" placeholder="Your name">
</label>
<label for="">
    <p>Email</p> <br>
    <input type="email" name="email" placeholder="E-mail">
</label>
<label for="">
    <p>Password</p> <br>
    <input type="password" name="password" placeholder="Password">
</label>
<br>
<br>
<div class="enviartobt">
    <input type="submit" value="Send">
</div>
    </form>
</body>
</html>