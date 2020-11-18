<?php

class Utilisateur {

    private $id;
    private $username;
    private $password;
    private $profil;

//* --------------------Username-----------------------
  
    public function getUsername():string
    {
        return $this->username;
    }

    public function setUsername(string $username):self
    {
        $this->username = $username;

        return $this;
    }


//* --------------------Password-----------------------
  
    public function getPassword():string
    {
        return $this->password;
    }

    public function setPassword(string $password):self
    {
        $this->password = password_hash($password,PASSWORD_DEFAULT);

        return $this;
    }


    //* --------------------Profil-----------------------

    public function getProfil():string
    {
        return $this->profil;
    }


//* --------------------ID-----------------------
    
    public function getId() :?Int 
    {
        return $this->id;
    }


//* --------------------function to string-----------------------

    public function __toString() :string
    {
        return " [id] :" . $this->id . 
        " [username] :" . $this->username . " [password] :" . $this->password. " [profil] :" . $this->profil;
    }

}