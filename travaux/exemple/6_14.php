<?php

$t=[];
$nb=readline("Entrez le nombre de valeurs");
$somme=0;
$moyenne=0;
$noteSuperieur=0;
for ($i=0; $i<=$nb-1; $i++){

    $t[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");
    $somme+=$t[$i];
}	

$moyenne=$somme/$nb;

for ($i=0; $i<=$nb-1; $i++){

    if ($t[$i]>$moyenne) {
        $noteSuperieur++;
    }
   
}	

echo "il y a ".$noteSuperieur." note(s) supérieur à la moyenne";