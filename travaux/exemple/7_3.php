<?php

function reverce($t,$nb){

    for($i=0; $i<=($nb-1)/2; $i++){

        $temp=$t[$i];
        $t[$i]=$t[$nb-1-$i];
        $t[$nb-1-$i]=$temp;
        
    }
    return $t;
}


$t=[];
$nb=readline("Entrez le nombre de valeurs ");

for($i=0; $i<=$nb-1; $i++){

    $t[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");
    
    }


print_r(reverce($t,$nb));