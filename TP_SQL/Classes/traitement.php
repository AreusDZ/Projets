<?php
//vérifier que les infos ont été bien saisie
//method pour insérer un utilisateur avec un mdp hashé



   include_once('crud.php');
   if (isset($_POST['add'])) {
    if (isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['password']) && !empty($_POST['password'])) {

            $utilisateur = new Utilisateur();
            $utilisateur->setUsername($_POST['email'])->setPassword($_POST['password']);

            // AJOUT   
            addUser($_POST['email'],$_POST['password']);

        }

    } elseif(isset($_POST['connect'])) {

            //CONNEXION VERIFY
            verify($_POST['emailLogin'], $_POST['passwordLogin']);

        }