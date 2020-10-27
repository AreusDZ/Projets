
<html lang=fr>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>


  
    <?php 
                include('crud.php');
                //AJOUT
            if (isset($_GET["action"]) && $_GET["action"] == "ajout" && !empty($_POST)) {
                if (
                    isset($_POST["no_employe"]) && !empty($_POST["no_employe"]) &&
                    isset($_POST["no_serv"]) && !empty($_POST["no_serv"]) ) {

                    addEmployes($_POST);
                   
                    
                      }

                    //SUPPRIMER
            }elseif (isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_GET['no_employe']) && empty($_POST)) {
                    
                    deleteEmployes( $_GET);
                   

                    //Modifier
                }elseif (isset($_GET["action"]) && $_GET["action"] == "modify" && !empty($_POST) ) {

                    modifyEmployes($_POST);
               

                }
           
                
                    // générer les td du tableau HTML
                    $db=mysqli_init();
                    mysqli_real_connect($db,'localhost','samir','samsgbd','employes_service');
                    $rq=mysqli_query($db,'SELECT * from employes');
                    $data=mysqli_fetch_all($rq,MYSQLI_ASSOC); 
                    mysqli_close($db);


                     // FONCTION POUR QUE LE BOUTTON SUPPRIMER N'APPARAISSE QUE QUAND LE SERVICE EST VIDE
                    function employeExist($num)  
                    {
                        $db=bddConnect();
                        $r=mysqli_query($db,"SELECT * from employes as e INNER JOIN employes as e1 on e.no_employe=e1.no_sup  WHERE e.no_employe=$num ");
                        $data=mysqli_fetch_all($r,MYSQLI_ASSOC); 
                        if(!empty($data)){

                             return true;
                        }
                  
                        
                    }  
    ?>
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>no_employes</th>
                            <th>nom</th>
                            <th>prénom</th>
                            <th>emploi</th>
                            <th>embauche</th>
                            <th>salaire</th>
                            <th>commission</th>
                            <th>num service</th>
                            <th>num supérieur</th>
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
                                    <?php if(employeExist($value['no_employe'])==false){ ?><a href='modif_employes.php?action=delete&no_employe=<?php echo $value['no_employe']; ?>'> 
                                    <button type='submit' class='btn btn-primary'>Supprimer</button><?php } ?>
                                    </a>
                                    </td>

                                    <td>
                                    <a href='formulaire_employes2.php?action=modify&no_employe=<?php echo $value['no_employe'];?>'> 
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
            <input type="submit" class="btn btn-primary" onclick="window.location.href='formulaire_employes2.php'" value="+ Ajouter" />
        </div>
    </div>
</html>
