<html lang=fr>

    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>


  
    <?php 
                //AJOUT
            if (isset($_GET["action"]) && $_GET["action"] == "ajout" && !empty($_POST)) {
                if (
                    isset($_POST["no_serv"]) && !empty($_POST["no_serv"]) ) {

                    $service=$_POST['service']?$_POST['service']:'NULL';
                    $ville=$_POST['ville']?$_POST['ville']:'NULL'; // Pour gérer le cas ou le post du nom est vide, on remplace par NULL
                    $no_serv=$_POST['no_serv'];
                   

                    $db=mysqli_init();
                    mysqli_real_connect($db,'localhost','samir','samsgbd','employes_service');
                    $rs=mysqli_query($db,"INSERT INTO service2 VALUES( $no_serv , '$service' , '$ville')" );
                    $query="INSERT INTO service2 VALUES( $no_serv , '$service' , '$ville')";
                    echo $query;
                    mysqli_close($db);

                    if ($rs)
                    echo "<p>La ligne a été ajouté</p>";
                    else
                    echo "<p>Erreur</p>";
                    }

                    //SUPPRIMER
            }elseif (isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_GET['no_serv']) && empty($_POST)) {
                    $no_serv = $_GET['no_serv'];
                    

                    $db=mysqli_init();
                    mysqli_real_connect($db,'localhost','samir','samsgbd','employes_service');
                    $requete=mysqli_query($db,"DELETE FROM service2 WHERE no_serv= $no_serv " );
                    mysqli_close($db);

                    if($requete)
                    {
                      echo("La suppression a été correctement effectuée") ;
                    }
                    else
                    {
                      echo("La suppression à échouée") ;
                    }

                    //Modifier
                }elseif (isset($_GET["action"]) && $_GET["action"] == "modify" && !empty($_POST) ) {

                    $service=$_POST['service']?$_POST['service']:'NULL';
                    $ville=$_POST['ville']?$_POST['ville']:'NULL'; // Pour gérer le cas ou le post du nom est vide, on remplace par NULL
                    $no_serv=$_POST['no_serv'];
                
                $db=mysqli_init();
                mysqli_real_connect($db,'localhost','samir','samsgbd','employes_service');
                $rm=mysqli_query($db,"UPDATE service2 set service='$service',ville='$ville' WHERE no_serv=$no_serv " );
                $query="UPDATE service2 set service='$service',ville='$ville' WHERE no_serv=$no_serv ";
                echo $query;
                mysqli_close($db);

                if($rm)
                {
                  echo("La MODIF a été correctement effectuée") ;
                }
                else
                {
                  echo("La MODIF à échouée") ;
                }

            }
           
                    
                    // générer les td du tableau HTML
                    $db=mysqli_init();
                    mysqli_real_connect($db,'localhost','samir','samsgbd','employes_service');
                    $rq=mysqli_query($db,'SELECT * from service2');
                    $data=mysqli_fetch_all($rq,MYSQLI_ASSOC); 
                    mysqli_close($db);
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
                                    <a href='modif_service.php?action=delete&no_serv=<?php echo $value['no_serv']; ?>'> 
                                    <button type='submit' class='btn btn-primary'>Supprimer</button>
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
