<?php

function rendreMonnaie($m, $somdue){
    $rest=0;
    $rest=$m-$somdue;

    while ($rest>=10){
            $Nb10e++;
            $rest-=10;
        }
        
        $Nb5e=0;
        if ($rest>=5){
        $Nb5e=1;
        $rest-=5;
        }
        
    $t=[];
    $t[1]=$Nb10e;
    $t[2]=$Nb5e;
    $t[3]=$rest;
    
    return $t;
}



$e=1;
$somdue=0;

while ($e!=0) {
    $e=readline("entrer le montant "); 
    $somdue+=$e;
}


echo "Vous devez: $somdue euros \n";
$m=readline("Montant versé ");

$tab=rendreMonnaie($m,$somdue);

 echo "rendu de la monnaie:\n";
 echo "billets de 10e : $tab[1] \n";
 echo "billets de 5e : $tab[2] \n";
 echo "Pièces de 1e :  $tab[3] \n";