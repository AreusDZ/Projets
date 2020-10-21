<?php

// Tri par insertion croissant
// $t=[];
// $nb=readline("Entrez le nombre de valeurs ");
// $minimum=0;
// $position=0;
// $temp=0;

// for($i=0; $i<=$nb-1; $i++){

// $t[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");

// }

// for($i=0; $i<=$nb-1; $i++){
//     $minimum=$t[$i];
//     $position=$i;
//         for($j=$i+1; $j<=$nb-1; $j++){
//             if ($t[$j]<$minimum){
//                 $minimum=$t[$j];
//                 $position=$j;
//             }
           
//         }
//     $temp=$t[$i];
// 	$t[$i]=$t[$position];
// 	$t[$position]=$temp;
// }

// print_r($t);

// Trie à bulle décroissant--------------------------------------------------------------------------------------------------------------------------------


function triBulle($t,$nb){
$yaPermute=true;
while($yaPermute){

    $yaPermute=false;

    for($i=0; $i<=$nb-1; $i++) {
        if ($t[$i]<$t[($i+1)]) {
            $temp=$t[$i];
            $t[$i]=$t[($i+1)];
            $t[($i+1)]=$temp;
            $yaPermute=true;
        }
    }
}
return $t;
}

$t=[];
$nb=readline("Entrez le nombre de valeurs ");
$temp=0;

for($i=0; $i<=$nb-1; $i++){

    $t[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");
    
}

print_r(triBulle($t,$nb));