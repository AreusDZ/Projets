<?php

$t1=[];
$t2=[];

$n=readline("Entrer le nombre : ");
$n2=readline("Entrer le nombre : ");
$s=0;

echo"remplissage du 1er tableau \n";
for ($i=0;$i<=$n-1;$i++) {
    $t1[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");
    
}
echo"remplissage du 2ème tableau \n";
for ($i=0;$i<=$n2-1;$i++) {
    $t2[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");
    
}

for ($i=0;$i<=$n-1;$i++){
    for ($j=0;$j<=$n2-1;$j++){
         $s+=$t1[$i]+$t2[$j];
    }
}
echo "Le schtroumpf est : ".$s;