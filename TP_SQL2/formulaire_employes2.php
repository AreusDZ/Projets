<?php 
    session_start();

    if(!$_SESSION){
        header('Location: presentation/form_connexion.php');
    }

?>

<html lang=fr>

    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <?php 
            include('presentation/formEmpPres.php');
            include('DAO/EmployeMysqliDAO.php');
                
                        // MODIFIER
            if (isset($_GET["action"]) && $_GET["action"] == "modify" && isset($_GET['no_emp']) ) {

                $no_emp=$_GET['no_emp'];
               
                $action="modify";

                //ajout
            }elseif(empty($_GET)){
                $action="ajout";
            } 
            
            
            formulaireEmp($action,$data);
            ?>


         