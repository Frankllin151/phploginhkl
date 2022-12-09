<?php 
class Usuario {
    private $id; 

    private $email; 

    private $name; 

    private $password;
 
    private $token;

    public function getId(){
        return $this->id;
    }

    public function setId($g){
 $this->id = $g;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
          $this->email = $e;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($n){
        $this->name = $n;
    }

public function getPass(){
    return $this->password;
}

public function setPass($wp){
     $this->password = $wp;
}


public function getToken(){
    return $this->token;
}

public function setToken($t){
     $this->token = $t;
}


}
interface UsuarioDao{

    public function findBYemail($email);
    
public function aDd(Usuario $add);

    public function  findAll();
    
  public function deleTe( $id);

    public function checkToken($Tokencheck, $logineml, $md5Pass); // variables they are in login_action.php

    public function resetPassword(Usuario $password);
}