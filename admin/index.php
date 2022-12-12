<?php 
// Check login 
require '../config.php';
$Dados = $_POST;

$Email = $Dados['email'];

$password = $Dados['password'];

$_SESSION['password'] = $password; 

$_SESSION['email'] = $Email;

$Admin = $pdo->prepare('SELECT * FROM `ADMIN`');

$Admin->execute();

$Admins = $Admin->fetchAll();


foreach ($Admins as $admUser) {
  if (($admUser['password'] === md5($password)) && ($admUser['email'] === $Email )) {
      $logado =   $admUser['email'];
  
  } else {
    header('Location: http://127.0.0.1/loginHKL');
 
  }
}



?>
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
     echo 'Você está logado:'.$logado;
    
    ?>
</body>
</html>