<?php

// OUVERTURE D'UNE SESSION
session_start();

// FONCTION AJOUT
   include_once('Utilisateur.php');

     
        function addUser(String $username, String $password) 
        {
           
            $utilisateur = 'utilisateur';
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $db = connect();
            $stmt = $db -> prepare ("INSERT INTO user VALUES(NULL,?,?,?)" );
            $stmt->bind_param("sss",$username,$passwordHash,$utilisateur);
            $stmt->execute();
            $res=$stmt->get_result();
            $query="INSERT INTO user VALUES('$username','$passwordHash','$utilisateur')";
            echo $query;
            $db -> close();
            return $res;

         }

// FONCTION CONNECT
        function connect()
        {
            $db = new mysqli('localhost','samir','samsgbd','afpa_test');
            return $db;
        }
// FONCTION VERIFY
        function verify(String $username,String $password)
        {
            $db = connect();
            $selectRequest = $db->prepare("SELECT * FROM user WHERE username = ?");
            $selectRequest->bind_param("s", $username);
            $selectRequest->execute();
            $rs=$selectRequest->get_result();
            $data=$rs->fetch_array(MYSQLI_ASSOC);
    
            // Verify password
            $isPasswordCorrect = password_verify($password, $data['password']);

            if ($isPasswordCorrect) {
                $_SESSION['username'] = $username;
                $_SESSION['profil'] = $data['profil'];

                header('Location: ../modif_employes.php');
                // print_r($_SESSION) ;

                 }else{
                
                header('Location: form_connexion.php');
             }
            
        }

      // fonction header pour rediriger un utilisateur vers une page (formulaire)
      // header('location: adresse de la page')
      // comme les session et les cookies, 
      // elle doit etre appelé avant meme que du contenu ne soit affiché (balise html, include avec de l'affichage etc.)
