<?php 
require '../config.php';

require '../dao/daomysqlUsuario.php';
// ADD CLASS 
$clasUser = new UsuariodaomySQ($pdo);

//get methodo POST
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

 $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

 $password = filter_input(INPUT_POST, 'password'); 

 $token = filter_input(INPUT_POST, 'token'); 


// check the method post and later 
// check if exist email register in DataBase
if($name && $email && $password){
if($clasUser->findBYemail($email) === false){

    $newUser = new Usuario();

    $newUser->setName($name);

    $newUser->setEmail($email); 

    $newUser->setPass(md5($password));

    $newUser->setToken($token);

    $clasUser->aDd($newUser);
 


     header('Location: http://127.0.0.1/loginHKL');

} else{
 header('Location: http://127.0.0.1/loginHKL/users/register');
}
} else{
    header('Location: http://127.0.0.1/loginHKL/users/register');

}