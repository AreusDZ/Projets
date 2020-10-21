<?php

$file = fopen("data.txt", "w+");  // vider le fichier
fwrite($file, "Hello world !");
fseek($file, 1); // modifie la position du curseur de lecture
// echo fread($file, filesize("data.txt")); // affiche tout le contenu du fichier

fclose($file);
​
// on peut utiliser "a+" et se passer de fseek
$file = fopen("data.txt", "r+"); // ouvre le fichier en lecture et ecriture avec curseur au début
fseek($file, filesize("data.txt"));
fwrite($file, " This is me !");
fwrite($file, "\nMy name is Chakib BENSARI");
fwrite($file, "\nAnd i am a Developer !");

fclose($file); // Toujours fermer le fichier

$file = fopen("data.txt", "r");
while (!feof($file)) { // tanque je n'ai pas (!) atteint la fin du fichier
    echo "Le curseur est à la position : " . ftell($file) . "\n"; //ftell permet de récupérer le position du curseur
    echo fgets($file);  // lit la ligne entiéremnt et place le curseur à la ligne suivante
}

<!-- <form action="test.php?action=ajout" method="post">
    <input type="text" name="prenom">
    <input type="submit" value="Valider">
</form> -->
​
<a href="index.php?action=delete&email=$tab['mail']"><button>Supprimer</button></a>
​
<?php
​
if ($_GET["action"] == "ajout" && !empty($_POST)) {
    // traitement ajout
} elseif ($_GET["action"] == "delete") {
    // traitement supression
}
​
if (isset($_GET["salutation"])) {
    echo $_GET["salutation"];
}
​
echo '<td><a href="index.php?action=delete&email=' . $tab["mail"] . '"><button>Supprimer</button></a></td>'
?>




