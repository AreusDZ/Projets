<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            if (empty($_GET)){
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-2">
                    <form action="homepage.php?action=ajout" method="POST">  
                        <!-- email  -->
                        <div class="form-group">
                            <label >mail :</label>
                            <input name="mail" type="email" class="form-control">
                        </div>
                        <!-- prénom -->
                        <div class="form-group">
                            <label >Prenom :</label>
                            <input name="prenom" class="form-control">
                        </div>
                        <!-- nom -->
                        <div class="form-group">
                            <label >Nom :</label>
                            <input name="nom" class="form-control">
                        </div>
                        <!-- âge -->    
                        <div class="form-group">
                            <label>Age :</label>
                            <input name="age" class="form-control">
                        </div>
                        <!-- nationalité -->
                        <div class="form-group">
                            <label>Nationalité :</label>
                            <input name="nationalite" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Soumettre"/>
                    </form>
                </div>

            <?php
             }
             elseif($_GET["action"]=="modify"){
            ?>
                <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-2">
                    <form action="homepage.php?action=modify&mail=<?php echo $_GET['mail'] ?>" method="POST">  
                        <!-- email  -->
                        <div class="form-group">
                            <label >mail :</label>
                            <input name="mail" type="email" required pattern="^\w{2,}@\w{2,}\.\w{2,}$" class="form-control" value=<?php echo $_GET['mail']; ?>>
                        </div>
                        <!-- prénom -->
                        <div class="form-group">
                            <label >Prenom :</label>
                            <input name="prenom" class="form-control" value=<?php echo $_GET['prenom']; ?>>
                        </div>
                        <!-- nom -->
                        <div class="form-group">
                            <label >Nom :</label>
                            <input name="nom" class="form-control" value=<?php echo $_GET['nom']; ?>>
                        </div>
                        <!-- âge -->    
                        <div class="form-group">
                            <label>Age :</label>
                            <input name="age" class="form-control" value=<?php echo $_GET['age']; ?>>
                        </div>
                        <!-- nationalité -->
                        <div class="form-group">
                            <label>Nationalité :</label>
                            <input name="nationalite" class="form-control" value=<?php echo $_GET['nationalite']; ?>>
                        </div>
                        <input type="submit" class="btn btn-primary" value="modifier"/>
                    </form>
                </div>
            </div>
        </div>
                    <?php  
                    }
                    
                    ?>
         
    </body>
</html>