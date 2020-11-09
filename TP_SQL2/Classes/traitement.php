
<?php
//vérifier que les infos ont été bien saisie
//method pour insérer un utilisateur avec un mdp hashé

   include_once('crud3.php');
   if (isset($_POST['add'])) {
    if (isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['password']) && !empty($_POST['password'])) {

            $utilisateur = new Utilisateur();
            $utilisateur->setUsername($_POST['email'])->setPassword($_POST['password']);

            // AJOUT   
            $password=$_POST['password'];
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            addUser($_POST['email'], $passwordHash );
            
            header('Location: form_connexion.php'); 
        }

    } elseif(isset($_POST['connect'])) {

            //CONNEXION VERIFY
            ConnectUser($_POST['emailLogin'], $_POST['passwordLogin']);
          
        
        }
