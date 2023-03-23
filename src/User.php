<?php
class User{

    private $username;
    private $email;
    public function __construct($username,$email)
    {
        $this->username =$username;
        $this->email =$email;
    }

    public function UserName($username = null){
        if($username){
            $this -> username = $username;
        }
        return $this ->username;
    }

    public function Email($email = null){
        if($email){
            $this -> email=$email;
        }
        return $this ->email;
    }
}


?>