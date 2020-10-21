<html lang=fr>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

</body>
<?php
$new_line_char = PHP_EOL;
$new_col_char  = ";";

// AJOUT
if (isset($_GET["action"]) && $_GET["action"] == "ajout" && !empty($_POST)) {
    if (
        isset($_POST["mail"]) && !empty($_POST["mail"]) &&
        isset($_POST["nom"]) && !empty($_POST["nom"]) &&
        isset($_POST["prenom"]) && !empty($_POST["prenom"]) &&
        isset($_POST["age"]) && !empty($_POST["age"]) &&
        isset($_POST["nationalite"]) && !empty($_POST["nationalite"])
    ) {

        $mail = $_POST['mail'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $nationalite = $_POST['nationalite'];

        if (preg_match("#^\w{2,}@\w{2,}\.\w{2,}$#",$mail)){
            echo "le mail est bien écrit";
        }else{
            echo "le mai est mal saisie";
        }

        $fichier = fopen("fichier.txt", "a+") or die("Unable to open file");
        fwrite($fichier, $mail . $new_col_char . $nom . $new_col_char . $prenom . $new_col_char . $age . $new_col_char . $nationalite . $new_line_char);
        fclose($fichier);
    }

//DELETE
} elseif (isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_GET['mail']) && empty($_POST)) {
    $mail = $_GET['mail'];
    $fichier = file_get_contents("fichier.txt");
    $tabs = explode($new_line_char, $fichier);      // tabs contient chaque ligne du fichier
    $new_file = "";

    foreach ($tabs as $row) {
        if (!empty($row)) {
            $col = explode($new_col_char, $row);   // Si la valeur n'est pas vide, je prend chaque données jusqu'au ";" et je range ça dans col

            if ($col[0] != $mail) {               // Si le mail ne correspond pas au mail du GET
                $new_file .= $row . $new_line_char; // écrit la ligne entier et reviens à la ligne, .= pour ne pas écraser les données
            }
        }
    }
    file_put_contents("fichier.txt", $new_file);   // Tu écris chaque ligne dans le new file sauf la ligne à suprimer et après tu écrases les valeurs du fichier.txt et tu les remplaces par les données du new file

//MODIFY
} elseif (
    isset($_GET["action"]) && $_GET["action"] == "modify" && isset($_GET['mail']) && !empty($_POST)
    && isset($_POST["nom"]) && !empty($_POST["nom"]) &&
    isset($_POST["prenom"]) && !empty($_POST["prenom"]) &&
    isset($_POST["age"]) && !empty($_POST["age"]) &&
    isset($_POST["nationalite"]) && !empty($_POST["nationalite"])
) {

    $mail = $_GET['mail'];
    $email = $_POST['mail'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $nationalite = $_POST['nationalite'];

    $fichier = file_get_contents("fichier.txt"); // str_replace()
    $tabs = explode($new_line_char, $fichier);
    $new_file = "";
    
    foreach ($tabs as $row) {
        if (!empty($row)) {
            $col = explode($new_col_char, $row);
            if ($col[0] != $mail) {
                $new_file .= $row . $new_line_char;
            } 
        }
    }
   
    file_put_contents("fichier.txt", $new_file);
}


?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Age</th>
                        <th>Nationnalitée</th>
                        <th>Suppression</th>
                        <th>Modification</th>
                        <th>Afficher</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $fichier = fopen("fichier.txt", "r") or die("Unable to open file");
                        while (!feof($fichier)) {
                            $ligne = fgets($fichier);
                            if (!empty($ligne)) {
                                $tab = explode($new_col_char, $ligne);

                                foreach ($tab as $value) {
                                    echo "<td>$value</td>";
                                } ?>

                                <td>
                                    <a href='homepage.php?action=delete&mail=<?php echo $tab[0]; ?>'>
                                        <button class='btn btn-outline-warning' value='Remove'>Supprimer</button>
                                    </a>
                                </td>
                                <td>
                                    <a href='gestion.php?action=modify&mail=<?php echo $tab[0]; ?>&nom=<?php echo $tab[1]; ?>&prenom=<?php echo $tab[2]; ?>&age=<?php echo $tab[3]; ?>&nationalite=<?php echo $tab[4]; ?>'>
                                                                                                                                                                                                
                                        <button class='btn btn-outline-warning' value='modify'>Modifier</button>
                                    </a>
                                </td>
                                <td>
                                    <a href='detail.php?action=detail&mail=<?php echo $tab[0]; ?>&nom=<?php echo $tab[1]; ?>&prenom=<?php echo $tab[2]; ?>&age=<?php echo $tab[3]; ?>&nationalite=<?php echo $tab[4]; ?> '>
                                                                                                                                                                                               
                                        <button class='btn btn-outline-warning' value='detail'>Afficher</button>
                                    </a>
                                </td>
                    </tr><?php
                            }
                        }
                        fclose($fichier);
                            ?>
                </tbody>
            </table>
        </div>
        <input type="submit" class="btn btn-primary" onclick="window.location.href='gestion.php'" value="+ Ajouter" />
    </div>
</div>
</body>

</html>