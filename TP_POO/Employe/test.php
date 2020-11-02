<?php

include_once 'Ouvrier.php';

include_once 'Cadre.php';

include_once 'Patron.php';

$ouvrier = new Ouvrier();
$ouvrier->setMatricule("1346")->setNom("LEGRAND")
        ->setPrenom("Karim")->setDateDeNaissance(new DateTime("01/01/1966"))
        ->setDateEntree(new DateTime("01/01/2000"));

// echo $ouvrier->getSalaire();


$cadre = new Cadre();
$cadre->setMatricule("1346")->setNom("LEGRAND")
      ->setPrenom("Karim")->setDateDeNaissance(new DateTime("01/01/1966"))
      ->setIndice(4);

// echo $cadre->getSalaire();

$patron = new Patron();
$patron->setMatricule("1346")->setNom("LEGRAND")
        ->setPrenom("Karim")->setDateDeNaissance(new DateTime("01/01/1966"))
        ->setPourcentage(50);

echo $patron;




// function bonjour($name, ?string $prenom = "Monsieur/Madame") : void 
// {
//     echo "Bonjour $prenom $name";
// }

// bonjour("DUPOND");


