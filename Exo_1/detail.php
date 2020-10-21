<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="container">


<?php
if (!empty($_GET)) {

    if ($_GET["action"] == "detail" && isset($_GET['mail']) 
    && isset($_GET['prenom']) 
    && isset($_GET['nom'])
    && isset($_GET['age'])
    && isset($_GET['nationalite'])){

    $mail   = $_GET['mail'];
    $prenom = $_GET['prenom'];
    $nom    = $_GET['nom'];
    $age   = $_GET['age'];
    $nationalite    = $_GET['nationalite'];
       
?>
    <table class="table table-striped table-dark w-75 m-auto">

        <thead>
            <tr>
                <th scope="col">Mail</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Nationalité</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $mail; ?></td>
                <td><?php echo $prenom; ?></td>
                <td><?php echo $nom; ?></td>
                <td><?php echo $age; ?></td>
                <td><?php echo $nationalite; ?></td>
            </tr>
        </tbody>
    </table>

   
<?php
    }
} 
?>
</div>
</body>
</html>