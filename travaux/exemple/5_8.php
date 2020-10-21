<?php

$n=1;
$i=0;
$pg=0;

while ($n!=0) {
    $n=readline("entrer un nombre "); 
    $i++;
    if ($i==1 || $n>$pg){
        $pg=$n;
        $ipg=$i;
    }
}

echo "Le nombre le plus grand était : $pg et la position est $ipg";