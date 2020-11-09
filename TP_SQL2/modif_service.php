<?php 
    session_start();

    if(!$_SESSION){
        header('Location: classes/form_connexion.php');
    }

?>

<html lang=fr>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>


    <?php 
            include('DAO/ServiceMysqliDAO.php');
            include_once('classes/Service.php');
            
                //AJOUT
            if (isset($_GET["action"]) && $_GET["action"] == "ajout" && !empty($_POST)) {
                if (
                    isset($_POST["noserv"]) && !empty($_POST["noserv"]) ) {

                        $service = new Service();
                        $service->setNoServ($_POST["noserv"])->setVille($_POST["ville"])->setService($_POST["service"]);
                        
                        ServiceMysqliDAO::addService($service);

                    }

                    //SUPPRIMER
            }elseif (isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_GET['noserv']) && empty($_POST)) {
                 
                    
                        ServiceMysqliDAO::deleteService($_GET['noserv']);

                    //Modifier
                }elseif (isset($_GET["action"]) && $_GET["action"] == "modify" && !empty($_POST) ) {

                        $service = new Service();
                        $service->setNoServ($_POST["noserv"])->setVille($_POST["ville"])->setService($_POST["service"]);
                        ServiceMysqliDAO::modifyService($service);

                }
           
               
                  // générer le tableau
                        $data= ServiceMysqliDAO::generateTab();
                    

                  
    ?>
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>noserv</th>
                            <th>service</th>
                            <th>ville</th>
                            <th>supprimer</th>
                            <th>modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                foreach ($data as $key => $value) {
                                    foreach ($value as $v) {
                                        echo "<td>$v</td>";
                                    }  
                            ?>
                                    <td>
                                    <?php if(ServiceMysqliDAO::serviceExist($value['noserv'])==false){ ?><a href='modif_service.php?action=delete&noserv=<?php echo $value['noserv']; ?>'>
                                    <button type='submit' class='btn btn-primary'>Supprimer</button><?php }?> 
                                    </a>
                                    </td>

                                    <td>
                                    <a href='formulaire_service.php?action=modify&noserv=<?php echo $value['noserv'];?>'> 
                                    <button type='submit' class='btn btn-danger'>Modifier</button>
                                    </a>
                                    </td>
                        </tr>
                            <?php
                            } 
                            
                            ?>
                    </tbody>
                </table>
                
            </div>
            <div>
                <input type="submit" class="btn btn-primary" onclick="window.location.href='formulaire_service.php'" value="+ Ajouter" />
            </div>
            <div style="margin-left: 5px;">
                <a class="btn btn-danger w-30" href="classes/disConnect.php">Déconnexion</a>
            </div>
        </div>
    </div>
</html>
