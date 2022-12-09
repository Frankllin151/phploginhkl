<?php 
require '../config.php';
require '../dao/daomysqlUsuario.php';

$daomysql = new UsuariodaomySQ($pdo);

$emailOgin = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

$passwordLogin = filter_input(INPUT_POST, 'password');

$Tokencheck = filter_input(INPUT_POST, 'token' );

$md5Pass = md5($passwordLogin); 

$logineml = $emailOgin;



if($daomysql->checkToken($Tokencheck, $logineml, $md5Pass) === false){


} else{

}