<?php

$t=[];
$nb=readline("Entrez le nombre de valeurs");
$position=0;
$max=0;

for ($i=0; $i<=$nb-1; $i++){

    $t[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");
        if ($i==1 || $t[$i]>$max) {
            $max= $t[$i];
            $position=$i;
        }
}	
echo "Le maximum est ".$max." à la position " .$position;