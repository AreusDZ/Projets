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
            if (isset($_GET["action"]) && $_GET["action"] == "modify" && isset($_GET['noserv']) ) {

                $noserv=$_GET['noserv'];
                
                $db=mysqli_init();
                mysqli_real_connect($db,'localhost','samir','samsgbd','afpa_test');
                $rs=mysqli_query($db,"SELECT * FROM service WHERE noserv= $noserv " );
                $data=mysqli_fetch_array($rs,MYSQLI_ASSOC);
                $rm=mysqli_query($db,"UPDATE * FROM service WHERE noserv= $noserv " );
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
                    <form action="<?php  if ($action=="modify"){ ?>modif_service.php?action=modify<?php }elseif($action=="ajout"){?>modif_service.php?action=ajout<?php } ?>&noserv=<?php if( $action== "modify"){echo $data['noserv']; }?>" method="POST">  
                        <!-- noserv  -->
                        <div class="form-group">
                            <label>Numéro de service :</label>
                            <input name="noserv" type="text" value="<?php if( $action == "modify"){echo $data['noserv'];}?>" class="form-control">
                        </div>
                        <!-- service -->
                        <div class="form-group">
                            <label>Service :</label>
                            <input name="service" type="text" value="<?php if( $action == "modify"){ echo $data['service'];}?>" class="form-control">
                        </div>
                        <!-- ville -->
                        <div class="form-group">
                            <label>Ville :</label>
                            <input name="ville" type="text" value="<?php if( $action == "modify") {echo $data['ville'];}?>" class="form-control">
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Ajouter"/>
                    </form>
                </div>
                
</html>