<?php

// OUVERTURE D'UNE SESSION
session_start();

include('connect.php');


// FONCTION AJOUT
   include_once('classes/Utilisateur.php');

    class userMysqliDAO {

        public static function addUser(String $username, String $password) 
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
            public static function search(String $username)
        {
            $db = bddConnect();
            $selectRequest = $db->prepare("SELECT * FROM user WHERE username = ?");
            $selectRequest->bind_param("s", $username);
            $selectRequest->execute();
            $rs=$selectRequest->get_result();
            $data=$rs->fetch_array(MYSQLI_ASSOC);

            return $data;
        }
    
        // public static function ConnectUser(String $username, String $password) 
        // {
        //     $data = userMysqliDAO::search($username);     // Verify password
        //     $isPasswordCorrect = password_verify($password, $data['password']);

        //     if ($isPasswordCorrect) {
        //         $_SESSION['username'] = $data['username'];
        //         $_SESSION['profil'] = $data['profil'];

        //         header('Location: navig.php');
        //         // print_r($_SESSION) ;

        //          }else{
                
        //         header('Location: form_connexion.php');  // dans le traitement après l'appel à la fonction
        //      }
            
        // }

}

        
