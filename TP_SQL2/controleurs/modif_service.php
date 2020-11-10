<?php 
    session_start();

    if(!$_SESSION){
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
            include('../DAO/ServiceMysqliDAO.php');
            include_once('../classes/Service.php');
            include('../service/serviceService.php');
            include('../presentation/tableau_service.php');
            
                //AJOUT
            if (isset($_GET["action"]) && $_GET["action"] == "ajout" && !empty($_POST)) {
                if (
                    isset($_POST["noserv"]) && !empty($_POST["noserv"]) ) {

                       serviceService::add($_POST["noserv"],$_POST["ville"],$_POST["service"]);  // appelle la fonction de la couche service dans le fichier serviceService.php

                    }

                    //SUPPRIMER
            }elseif (isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_GET['noserv']) && empty($_POST)) {
                 
                    
                    serviceService::delete($_GET['noserv']);

                    //Modifier
            }elseif (isset($_GET["action"]) && $_GET["action"] == "modify" && !empty($_POST) ) {

                    serviceService::modify($_POST["noserv"],$_POST["ville"],$_POST["service"]);

                }
           
               
                // générer le tableau
                        $data = serviceService::tabGenerate();
                    
                // appelle de l'affichage
                        tableau($data); 
    ?>
        
       
</html>
