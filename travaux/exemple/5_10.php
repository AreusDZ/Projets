<?php
$n=readline("entrer le nombres de chevaux partants : "); 

$p=readline("entrer le nombres de chevaux joués : "); 

$num=1;

for ($i=2;$i<=$n;$i++) {
    $num*=$i;
}

$deno1=1;

for ($i=2;$i<=$n-$p;$i++) {
    $deno1*=$i;
}

$deno2=1;

for ($i=2;$i<=$p;$i++) {
    $deno2*=$i;
}

echo "Dans l'ordre, une chance sur " .$num/$deno1. "\n";
echo "Dans le désordre, une chance sur " .$num/($deno1*$deno2)."\n"; 

