<?php

// OUVERTURE D'UNE SESSION
session_start();

include('../connect.php');


// FONCTION AJOUT
   include_once('Utilisateur.php');

     
        function addUser(String $username, String $password) 
        {
           
            $utilisateur = 'utilisateur'; // forcer la valeur 'utilisateur' comme profil
           

            $db = bddConnect();
            $stmt = $db -> prepare ("INSERT INTO user VALUES(NULL,?,?,?)" );
            $stmt->bind_param("sss",$username,$password,$utilisateur);
            $stmt->execute();
            $res=$stmt->get_result();
            $query="INSERT INTO user VALUES('$username','$password','$utilisateur')";
            echo $query;
            $db -> close();
            return $res;

         }


// FONCTION VERIFY
        function verify(String $username)
        {
            $db = bddConnect();
            $selectRequest = $db->prepare("SELECT * FROM user WHERE username = ?");
            $selectRequest->bind_param("s", $username);
            $selectRequest->execute();
            $rs=$selectRequest->get_result();
            $data=$rs->fetch_array(MYSQLI_ASSOC);

            return $data;
        }
    
        function ConnectUser(String $username, String $password) 
        {
            $data = verify($username);     // Verify password
            $isPasswordCorrect = password_verify($password, $data['password']);

            if ($isPasswordCorrect) {
                $_SESSION['username'] = $data['username'];
                $_SESSION['profil'] = $data['profil'];

                header('Location: ../modif_employes.php');
                // print_r($_SESSION) ;

                 }else{
                
                header('Location: form_connexion.php');  // dans le traitement après l'appel à la fonction
             }
            
        }

      // fonction header pour rediriger un utilisateur vers une page (formulaire)
      // header('location: adresse de la page')
      // comme les session et les cookies, 
      // elle doit etre appelé avant meme que du contenu ne soit affiché (balise html, include avec de l'affichage etc.)
