<?php
//vérifier que les infos ont été bien saisie
//method pour insérer un utilisateur avec un mdp hashé


// FONCTION AJOUT
   include_once('Utilisateur.php');

     
        function addUser(String $username, String $password) 
        {
           
            $utilisateur = 'Utilisateur';
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
            $rs   = $selectRequest->get_result();
            $data = $rs->fetch_array(MYSQLI_ASSOC);
    
            //* Verify password
            $isPasswordCorrect = password_verify($password, $data['password']);
            if ($isPasswordCorrect) {

                echo "bienvenue vous etes connecté";

            } else{
                
                echo"non";
            }
            
        }

        // inscrition admin pas logique, enlever le select laisser que mail et password. plus besoin de profil, 
        // directement user par défaut dans l'insert
        // se renseigner sur password_verify, ça sera pour la connexion 
        // page accueille pour soit connexion soit inscription