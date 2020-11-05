<?php 
    session_start();

    if(!$_SESSION ){
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
                include('crud.php');
                include_once('classes/Employe.php');
                
                //AJOUT
            if ($_SESSION['profil']=='administrateur' && isset($_GET["action"]) && $_GET["action"] == "ajout" && !empty($_POST)) {
                if ( isset($_POST["no_emp"]) && !empty($_POST["no_emp"]) &&
                    isset($_POST["no_serv"]) && !empty($_POST["no_serv"]) ) {

                    $employe = new Employe();
                    $employe->setNoEmploye($_POST["no_emp"])->setNom($_POST["nom"])->setPrenom($_POST["prenom"])->setEmploi($_POST["emploi"])
                    ->setEmbauche($_POST["embauche"])->setSalaire($_POST["salaire"])->setCommission($_POST["commission"])->setNoServ($_POST["no_serv"])
                    ->setNoSup($_POST["sup"]);
                        
                    addEmployes($employe);
                   
                    
                      }

                    //SUPPRIMER
            }elseif ($_SESSION['profil']=='administrateur' && isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_GET['no_emp']) && empty($_POST)) {
                    
                    deleteEmployes( $_GET);
                   

                    //Modifier
                }elseif ($_SESSION['profil']=='administrateur' && isset($_GET["action"]) && $_GET["action"] == "modify" && !empty($_POST) ) {

                    $employe = new Employe();
                    $employe->setNoEmploye($_POST["no_emp"])->setNom($_POST["nom"])->setPrenom($_POST["prenom"])->setEmploi($_POST["emploi"])
                    ->setEmbauche($_POST["embauche"])->setSalaire($_POST["salaire"])->setCommission($_POST["commission"])->setNoServ($_POST["no_serv"])
                    ->setNoSup($_POST["sup"]);

                    modifyEmployes($employe);
               

                }
           
                // générer le tableau
               $data= generateTab();
                  


                     
                   

                
    ?>
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>no_emps</th>
                            <th>nom</th>
                            <th>prénom</th>
                            <th>emploi</th>
                            <th>embauche</th>
                            <?php 
                            
                                if($_SESSION['profil']=='administrateur') {
                                
                            ?>
                            <th>salaire</th>
                            <th>commission</th>
                                <?php 
                                
                                    }else{

                                    }
                                
                                ?>
                            <th>num service</th>
                            <th>num supérieur</th>
                            <?php 
                            
                            if($_SESSION['profil']=='administrateur') {
                            
                        ?>
                            <th>supprimer</th> 
                            <th>modifier</th>
                              <?php 
                                
                                    }else{

                                    }
                                
                                ?>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                foreach ($data as $key => $value) {
                                    foreach ($value as $k => $v) {
                                      if($_SESSION['profil']=='utilisateur' && !($k=='salaire' || $k=='commission')){

                                           echo "<td>$v</td>";

                                      }elseif($_SESSION['profil']=='administrateur'){
                                            echo "<td>$v</td>";
                                      }
                                       
                                       
                                    }
                                     
                            ?>
                                    <td>
                                    <?php if(employeExist($value['no_emp'])==false && $_SESSION['profil']=='administrateur'){ ?><a href='modif_employes.php?action=delete&no_emp=<?php echo $value['no_emp']; ?>'> 
                                    <button type='submit' class='btn btn-primary'>Supprimer</button><?php } ?>
                                    </a>
                                    </td>

                                    <td>
                                       <?php if($_SESSION['profil']=='administrateur') {?>
                                    <a href='formulaire_employes2.php?action=modify&no_emp=<?php echo $value['no_emp'];?>'> 
                                    <button type='submit' class='btn btn-danger'>Modifier</button>
                                    </a> <?php 
                                       
                                            }else{
                                                
                                            }
                                         

                                       ?>
                                    </td>
                                      
                                  
                        </tr>
                            <?php
                            } 
                            
                            ?>
                    </tbody>
                </table>
            </div>
            <input type="submit" class="btn btn-primary" onclick="window.location.href='formulaire_employes2.php'" value="+ Ajouter" />
        </div>
    </div>
</html>
