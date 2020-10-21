<?php

// $dico = [];
// $nb   = readline("Entrez le nombre de mot que vous allez entrer : ");
// for($i=1; $i<=$nb; $i++) {
//     $dico[$i]=readline("Entrez le mot numéro $i : \n");
// }
// $mot = readline("Entrer le mot à vérifier : ");
// $v   = array_search($mot,$dico);
// if ($v != false) {                           // Array_search renvoi l'indice du mot, si le mot n'est pas présent elle renvoi false.
//     echo "le mot est présent ";
// } else {
//     echo "le mot n'est pas présent ";
// }


// $dicto=[];
// $nb=readline("Entrez le nombre de mot que vous allez entrer : ");
//     for($i=1; $i<=$nb; $i++) {
//     $dicto[$i]=readline("Entrez le mot numéro $i : \n");
//     }
// $indiceD=1;
// $indiceF=$nb;
// $banco=false;
// $mot=readline("Saisissez un mot à rechercher : ");
// do {
// $indiceM=($indiceD+$indiceF)/2;
// $m = intval($indiceM);
//     if ($mot>$dicto[$m]) {
//         $indiceD=$m+1;
//     }
//     elseif ($mot<$dicto[$m]) {
//         $indiceF=$m-1;
//     }
//     else {
//         $banco=true;
//     break;
//     }
// } while ( $indiceD<=$indiceF );
// if ($banco) {
//     echo ("Mot trouvé ! ");
// }
// else {
//     echo ("Mot inconnu...");
// }

$dicto=array_combine(range(1,26), range('A','Z'));
$indiceD=1;
$indiceF=26;
$banco=false;
$mot=readline("Saisissez un mot à rechercher : "); 
do {
$indiceM=($indiceD+$indiceF)/2;
$m = intval($indiceM);
    if ($mot>$dicto[$m]) {
        $indiceD=$m+1;
    }
    elseif ($mot<$dicto[$m]) {
        $indiceF=$m-1;
    }
    else{
        $banco=true;
    break;
    }
} while ( $indiceD<=$indiceF );
if ($banco) {
    echo ("Mot trouvé ! ");
}
else {
    echo ("Mot inconnu...");
}