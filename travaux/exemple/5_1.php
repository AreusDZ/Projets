<?php


$n=0;
while($n<1 || $n>3){
    $n=readline("entrer un nombre entre 1 et 3 "); 
    if($n<1 || $n>3) {
        echo "saisie erronée.Recommencez \n";
    }
    else{
        echo "BRAVO !!!";
    }
}