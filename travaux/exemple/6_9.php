<?php

$t=[];
$somme=0;
$n=readline("Entrer le nombre : ");

for ($i=0;$i<=$n-1;$i++) {
    $t[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");
    $somme+=$t[$i];
}

echo "La somme des éléments du tableau est : " .$somme;