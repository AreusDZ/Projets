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
 
                
                        // MODIFIER
            if (isset($_GET["action"]) && $_GET["action"] == "modify" && isset($_GET['no_emp']) ) {

                $no_emp=$_GET['no_emp'];
                
                $db=mysqli_init();
                mysqli_real_connect($db,'localhost','samir','samsgbd','afpa_test');
                $rs=mysqli_query($db,"SELECT * FROM employes WHERE no_emp= $no_emp " );
                $data=mysqli_fetch_array($rs,MYSQLI_ASSOC);
                $rm=mysqli_query($db,"UPDATE * FROM employes WHERE no_emp= $no_emp " );
                mysqli_close($db);
                $action="modify";

                //ajout
            }elseif(empty($_GET)){
                $action="ajout";
            }
            ?>
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-2">
                    <form action="<?php  if ($action=="modify"){ ?>modif_employes.php?action=modify<?php }elseif($action=="ajout"){?>modif_employes.php?action=ajout<?php } ?>&no_emp=<?php if( $action== "modify"){echo $data['no_emp']; }?>" method="POST">  
                        <!-- no_emps  -->
                        <div class="form-group">
                            <label>numéro d'employé :</label>
                            <input name="no_emp" type="text" value="<?php if( $action == "modify"){echo $data['no_emp'];}?>" class="form-control">
                        </div>
                        <!-- prénom -->
                        <div class="form-group">
                            <label>Prenom :</label>
                            <input name="prenom" type="text" value="<?php if( $action == "modify"){ echo $data['prenom'];}?>" class="form-control">
                        </div>
                        <!-- nom -->
                        <div class="form-group">
                            <label>Nom :</label>
                            <input name="nom" type="text" value="<?php if( $action == "modify") {echo $data['nom'];}?>" class="form-control">
                        </div>
                        <!-- emploi -->    
                        <div class="form-group">
                            <label>emploi :</label>
                            <input name="emploi" type="text" value="<?php if( $action == "modify") {echo $data['emploi'];}?>" class="form-control">
                        </div>
                        <!-- embauche -->
                        <div class="form-group">
                            <label>date d'embauche :</label>
                            <input name="embauche" type="text" value="<?php if( $action == "modify") {echo $data['embauche'];}?>" class="form-control">
                        </div>
                        <!-- salaire -->
                        <div class="form-group">
                            <label>salaire :</label>
                            <input name="salaire" type="text" value="<?php if( $action == "modify") {echo $data['salaire'];}?>" class="form-control">
                        </div>
                        <!-- commission -->
                        <div class="form-group">
                            <label>Commission :</label>
                            <input name="commission" type="text" value="<?php if( $action == "modify") {echo $data['commission'];}?>" class="form-control">
                        </div>
                        <!-- no_serv -->
                        <div class="form-group">
                            <label>Numéro de service :</label>
                            <input name="no_serv" type="text" min="1" max="7" value="<?php if( $action == "modify") {echo $data['no_serv'];}?>" class="form-control">
                        </div>
                        <!-- sup -->
                        <div class="form-group">
                            <label>Numéro de supérieur :</label>
                            <input name="sup" type="text" value="<?php if( $action == "modify") {echo $data['sup'];}?>" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Ajouter"/>
                    </form>
                </div>
                
</html>