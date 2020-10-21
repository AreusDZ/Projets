<?php

function dateValide($j,$m,$a){
    $b=($annee%400==0) || ($annee % 4 == 0 && $annee % 100 !== 0);  // $b est vrai si ..

if ($jour > 31 || $mois > 12 || ($mois = 2 && (($b && $jour > 29) || (!$b && $jour > 28))) ||
		(($mois = 4 || $mois = 6 || $mois = 9 || $mois = 11) && $jour > 30)
		){
            return false;
        }
			
		 else {
            return true;
         }
}

$jour=readline("entrer le jour ");
$mois=readline("entrer le mois ");
$annee=readline("entrer l'annee ");

if(dateValide($jour,$mois,$annee)){
    echo "date valide";
}
else{
    echo "date invalide";
}		




