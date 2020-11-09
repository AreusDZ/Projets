
<?php
//vérifier que les infos ont été bien saisie
//method pour insérer un utilisateur avec un mdp hashé

   include_once('DAO/userMysqliDAO.php');
   include('service/serviceUser.php');
   
   if (isset($_POST['add'])) {
    if (isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['password']) && !empty($_POST['password'])) {

            serviceUser::add($_POST['email'],$_POST['password']);
            header('Location: form_connexion.php'); 
        }

    } elseif(isset($_POST['connect'])) {

            //CONNEXION VERIFY
            
            $data = serviceUser::connexion($_POST['emailLogin']);
           

            if ($data) {
                
                $isPasswordCorrect= serviceUser::verifyPassword($_POST['passwordLogin'], $data['password']);

                if ($isPasswordCorrect){

                    $_SESSION['username'] = $data['username'];
                    $_SESSION['profil'] = $data['profil'];
    
                    header('Location: navig.php');
                    // print_r($_SESSION) ;
                }
                

                 }else{
                
                header('Location: form_connexion.php');  // dans le traitement après l'appel à la fonction
             }
            
       
        
        }
