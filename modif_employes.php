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
                    isset($_POST["no_employe"]) && !empty($_POST["no_employe"]) &&
                    isset($_POST["no_serv"]) && !empty($_POST["no_serv"]) ) {

                    $no_employe=$_POST['no_employe'];
                    $nom=$_POST['nom']?$_POST['nom']:'NULL'; // Pour gérer le cas ou le post du nom est vide, on remplace par NULL
                    $prenom=$_POST['prenom']?$_POST['prenom']:'NULL';
                    $emploi=$_POST['emploi']?$_POST['emploi']:'NULL';
                    $embauche=$_POST['embauche']?$_POST['embauche']:'NULL';
                    $salaire=$_POST['salaire']?$_POST['salaire']:'NULL';
                    $commission=$_POST['commission']?$_POST['commission']:'NULL';
                    $no_serv=$_POST['no_serv'];
                    $no_sup=$_POST['no_sup']?$_POST['no_sup']:'NULL';

                    $db=mysqli_init();
                    mysqli_real_connect($db,'localhost','samir','samsgbd','employes_service');
                    $rs=mysqli_query($db,"INSERT INTO employes VALUES( $no_employe , '$nom' , '$prenom' , '$emploi' , $embauche , $salaire , $commission , $no_serv , $no_sup)" );
                    $query="INSERT INTO employes VALUES( $no_employe , '$nom' , '$prenom' , '$emploi' , $embauche , $salaire , $commission , $no_serv , $no_sup)";
                    echo $query;
                    mysqli_close($db);

                    if ($rs)
                    echo "<p>La ligne a été ajouté</p>";
                    else
                    echo "<p>Erreur</p>";
                    }

                    //SUPPRIMER
            }elseif (isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_GET['no_employe']) && empty($_POST)) {
                    $no_employe = $_GET['no_employe'];
                    

                    $db=mysqli_init();
                    mysqli_real_connect($db,'localhost','samir','samsgbd','employes_service');
                    $requete=mysqli_query($db,"DELETE FROM employes WHERE no_employe= $no_employe " );
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

                $no_employe=$_POST['no_employe'];
                $nom=$_POST['nom']?$_POST['nom']:'NULL'; // Pour gérer le cas ou le post du nom est vide, on remplace par NULL
                $prenom=$_POST['prenom']?$_POST['prenom']:'NULL';
                $emploi=$_POST['emploi']?$_POST['emploi']:'NULL';
                $embauche=$_POST['embauche']?$_POST['embauche']:'NULL';
                $salaire=$_POST['salaire']?$_POST['salaire']:'NULL';
                $commission=$_POST['commission']?$_POST['commission']:'NULL';
                $no_serv=$_POST['no_serv'];
                $no_sup=$_POST['no_sup']?$_POST['no_sup']:'NULL';
                
                $db=mysqli_init();
                mysqli_real_connect($db,'localhost','samir','samsgbd','employes_service');
                $rm=mysqli_query($db,"UPDATE employes set nom='$nom',prenom='$prenom',emploi='$emploi',embauche=$embauche,salaire=$salaire,commission=$commission,no_serv=$no_serv,no_sup=$no_sup  WHERE no_employe= $no_employe " );
                $query="UPDATE employes set nom='$nom',prenom='$prenom',emploi='$emploi',embauche=$embauche,salaire=$salaire,commission=$commission,no_serv=$no_serv,no_sup=$no_sup  WHERE no_employe= $no_employe ";
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
                    $rq=mysqli_query($db,'SELECT * from employes');
                    $data=mysqli_fetch_all($rq,MYSQLI_ASSOC); 
                    mysqli_close($db);
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
                                    <a href='modif_employes.php?action=delete&no_employe=<?php echo $value['no_employe']; ?>'> 
                                    <button type='submit' class='btn btn-primary'>Supprimer</button>
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
