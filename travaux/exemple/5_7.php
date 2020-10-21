<?php

$pg=0;

for ($i=1;$i<=5;$i++) {
    $n=readline("entrer un nombre "); 
    if ($i==1 || $n>$pg){
        $pg=$n;
        $ipg=$i;
    }
}

echo "Le nombre le plus grand était : $pg et la position est $ipg";