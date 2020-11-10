<?php 
    session_start();

    if(!$_SESSION ){
        header('Location: ../classes/form_connexion.php');
    }

?>
<html lang=fr>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>


  
    <?php 
                include('../DAO/EmployeMysqliDAO.php');
                include_once('../classes/Employe.php');
                include('../service/serviceEmploye.php');
                include('../presentation/tableau_employe.php');
                
                //AJOUT
            if ($_SESSION['profil']=='administrateur' && isset($_GET["action"]) && $_GET["action"] == "ajout" && !empty($_POST)) {
                if ( isset($_POST["no_emp"]) && !empty($_POST["no_emp"]) &&
                    isset($_POST["no_serv"]) && !empty($_POST["no_serv"]) ) {

                   
                        serviceEmploye::add($_POST["no_emp"],$_POST["nom"],$_POST["prenom"],$_POST["emploi"],$_POST["embauche"],$_POST["salaire"],$_POST["commission"],$_POST["no_serv"],$_POST["sup"]);// appelle la fonction de la couche service dans le fichier serviceEmploye.php
                    
                      }

                    //SUPPRIMER
            }elseif ($_SESSION['profil']=='administrateur' && isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_GET['no_emp']) && empty($_POST)) {
                    
                    serviceEmploye::delete( $_GET['no_emp']);
                   

                    //Modifier
            }elseif ($_SESSION['profil']=='administrateur' && isset($_GET["action"]) && $_GET["action"] == "modify" && !empty($_POST) ) {

                  

                    serviceEmploye::modify($_POST["no_emp"],$_POST["nom"],$_POST["prenom"],$_POST["emploi"],$_POST["embauche"],$_POST["salaire"],$_POST["commission"],$_POST["no_serv"],$_POST["sup"]);
               

                }
           
                // générer le tableau
                    $data =  serviceEmploye::tabGenerate();
                  


                     
                //appelle de l'affichage   
                tableau($data);
                
    ?>
        
    
</html>
