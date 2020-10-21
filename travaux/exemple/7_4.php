<?php
$t=[];
$nb=readline("Entrez le nombre de valeurs ");

for($i=1; $i<=$nb; $i++){
    $t[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");
}

$s=readline("Entrez le rang de la valeur à supprimer ");

for ($i=$s; $i<=$nb; $i++) {
    $t[$i]=$t[$i+1];
}


unset($t[$nb]);

print_r($t);