<?php
$n=readline("entrer le nombres de chevaux partants : "); 

$p=readline("entrer le nombres de chevaux joués : "); 

$a=1;
$b=1;

for ($i=1; $i<=$p; $i++) {
    $a=$a * ($i+$n-$p);
    $b=$b*$i;
}
echo "Dans l’ordre, une chance sur $a"; 
echo "Dans le désordre, une chance sur" .$a/$b;