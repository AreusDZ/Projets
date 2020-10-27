<html lang=fr>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>


    <?php 
            include('crud_service.php');
            

                //AJOUT
            if (isset($_GET["action"]) && $_GET["action"] == "ajout" && !empty($_POST)) {
                if (
                    isset($_POST["no_serv"]) && !empty($_POST["no_serv"]) ) {

                        addService($_POST);

                    }

                    //SUPPRIMER
            }elseif (isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_GET['no_serv']) && empty($_POST)) {
                 
                    deleteService($_GET);

                    //Modifier
                }elseif (isset($_GET["action"]) && $_GET["action"] == "modify" && !empty($_POST) ) {

                    modifyService($_POST);

                }
           
               
                    // générer les td du tableau HTML
                    $db=mysqli_init();
                    mysqli_real_connect($db,'localhost','samir','samsgbd','employes_service');
                    $rq=mysqli_query($db,'SELECT * from service');
                    $data=mysqli_fetch_all($rq,MYSQLI_ASSOC); 
                    mysqli_close($db); 
                    

                    // FONCTION POUR QUE LE BOUTTON SUPPRIMER N'APPARAISSE QUE QUAND LE SERVICE EST VIDE
                    function serviceExist($num)  
                    {
                        $db=bddConnect();
                        $r=mysqli_query($db,"SELECT * from employes as e INNER JOIN service as s on e.no_serv=s.no_serv  WHERE e.no_serv=$num ");
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
                            <th>no_serv</th>
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
                                    <?php if(serviceExist($value['no_serv'])==false){ ?><a href='modif_service.php?action=delete&no_serv=<?php echo $value['no_serv']; ?>'>
                                    <button type='submit' class='btn btn-primary'>Supprimer</button><?php }?> 
                                    </a>
                                    </td>

                                    <td>
                                    <a href='formulaire_service.php?action=modify&no_serv=<?php echo $value['no_serv'];?>'> 
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
            <input type="submit" class="btn btn-primary" onclick="window.location.href='formulaire_service.php'" value="+ Ajouter" />
        </div>
    </div>
</html>
