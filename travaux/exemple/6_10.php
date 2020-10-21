<?php

$t1=[];
$t2=[];
$t3=[];
$n=readline("Entrer le nombre : ");

echo"remplissage du 1er tableau \n";
for ($i=0;$i<=$n-1;$i++) {
    $t1[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");
    
}
echo"remplissage du 2ème tableau \n";
for ($i=0;$i<=$n-1;$i++) {
    $t2[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");
    
}


for ($i=0;$i<=$n-1;$i++) {
    $t3[$i]=$t1[$i]+$t1[$i];
    
}

print_r($t3);
