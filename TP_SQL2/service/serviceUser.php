<?php

class serviceUser{

    public static function add($email,$pwd){
        $utilisateur = new Utilisateur();
        $utilisateur->setUsername($email)->setPassword($pwd);

        // AJOUT   
        $password=$pwd;
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        return userMysqliDAO::addUser($email, $passwordHash );
    }



    public static function connexion($username)
    {
        $data = userMysqliDAO::search($username);     // Verify password
        return $data;

        
    }

    public static function verifyPassword($password,$dataPassword)
    {
        $isPasswordCorrect = password_verify($password, $dataPassword);
        return  $isPasswordCorrect;
    }

}