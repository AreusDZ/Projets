
<?php
//vérifier que les infos ont été bien saisie
//method pour insérer un utilisateur avec un mdp hashé

   include_once('../DAO/userMysqliDAO.php');
   include('../service/serviceUser.php');
   include('../presentation/userPresentation.php');
   
   if (isset($_POST['add'])) {
    if (isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['password']) && !empty($_POST['password'])) {

            serviceUser::add($_POST['email'],$_POST['password']);
            formConnexion();
        }

    } elseif(isset($_POST['connect'])) {

            //CONNEXION VERIFY
            
            $data = serviceUser::connexion($_POST['emailLogin']);
           

            if ($data) {
                
                $isPasswordCorrect= serviceUser::verifyPassword($_POST['passwordLogin'], $data['password']);

                if ($isPasswordCorrect){

                    $_SESSION['username'] = $data['username'];
                    $_SESSION['profil'] = $data['profil'];
    
                    navig();
                    // print_r($_SESSION) ;
                }
                

                 }else{
                
               formConnexion(); // dans le traitement après l'appel à la fonction
             }
            
       
        
        }
