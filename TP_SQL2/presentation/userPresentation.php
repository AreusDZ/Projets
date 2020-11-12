<html lang=fr>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>



    <?php 
            function navig(){
                return include('navig.php');
            }
    

            function formConnexion(){
                return include('form_connexion.php');
            }

            function inscription(){
                return include('inscription.php');
            }
    ?>

</html>