<?php
require '../dao/daomysqlUsuario.php'; 

require '../config.php';

$daomysql = new UsuariodaomySQ($pdo);

$daomysql->checkID();



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
    
</body>
</html>