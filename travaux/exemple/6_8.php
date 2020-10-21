<?php


$nombre_positif=0;
$nombre_negatif=0;
$t=[];
$n=readline("Entrer le nombre : ");

for ($i=0;$i<=$n-1;$i++) {
    $t[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");
    if ( $t[$i]>0){
        $nombre_positif++;
    }
    else{
        $nombre_negatif++;
    }
  
}


echo "Nombre de valeurs positives : " .$nombre_positif. "\n";
echo "Nombre de valeurs négatives : " .$nombre_negatif. "\n";
