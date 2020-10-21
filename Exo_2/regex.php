<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-2">
                        <form action="regex.php?action=verify" method="POST">  
                            <!-- email  -->
                            <div class="form-group">
                                <label >Référence client :</label>
                                <input name="ref" required pattern="^F[1-9]{9}$" class="form-control">
                            </div>
                            <!-- prénom -->
                            <div class="form-group">
                                <label >Numéro de téléphone :</label>
                                <input name="num" required pattern="^0(6|7)[0-9]{8}$" class="form-control">
                            </div>
                            <!-- âge -->    
                            <div class="form-group">
                                <label>Email :</label>
                                <input name="mail" required pattern="^\w{2,}@\w{2,}\.\w{2,}$" class="form-control">
                            </div>
                            <!-- nationalité -->
                            <div class="form-group">
                                <label>Numéro de sécurité social :</label>
                                <input name="secu" required pattern="^(1|2)\s([0-9]{2}|10|11|12)\s[0-9]{2}\s([0-9]{2}|99|91|92|93|94)\s[0-9]{3}\s[0-9]{3}\s[0-9]{2}$" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Vérifier"/>
                        </form>
                    </div>
            </div>
        <?php 
        if (
            isset($_POST["ref"]) && !empty($_POST["ref"]) &&
            isset($_POST["num"]) && !empty($_POST["num"]) &&
            isset($_POST["mail"]) && !empty($_POST["mail"]) &&
            isset($_POST["secu"]) && !empty($_POST["secu"])
        ) {
    
            $ref=$_POST["ref"];
            $num=$_POST["num"];
            $mail=$_POST["mail"];
            $secu=$_POST["secu"];
        

            if (preg_match("#^F[1-9]{9}$#",$ref) && 
            preg_match("#^0(6|7)[0-9]{8}$#",$num) && 
            preg_match("#^\w{2,}@\w{2,}\.\w{2,}$#",$mail) && 
            preg_match("#^(1|2)\s([0-9]{2}|10|11|12)\s[0-9]{2}\s([0-9]{2}|99|91|92|93|94)\s[0-9]{3}\s[0-9]{3}\s[0-9]{2}$#",$secu) ){
            
                echo "le formulaire est bien remplis";
            } else{
                echo "le formulaire est mal remplis";
            }
        }
        ?>   
        </body>
</html>