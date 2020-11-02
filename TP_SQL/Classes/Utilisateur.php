<?php

class Utilisateur {

    private $id;
    private $username;
    private $password;
    private $profil;

    public function __construct(string $userName,string $password,string $profil)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->profil = $userName;
    }

    function addUser() 
    {

        $db = new mysqli('localhost','samir','samsgbd','afpa_test');
        $res = $db -> query ("INSERT INTO utilisateur VALUES()" );
        $db -> close();
        return $res;

    }
    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of profil
     */ 
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */ 
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }


}