<?php
$t=[];
$nb=readline("Entrez le nombre de valeurs");

for ($i=1; $i<=$nb-1; $i++){

    $t[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");
	$t[$i]++;
	
	}	
print_r($t);