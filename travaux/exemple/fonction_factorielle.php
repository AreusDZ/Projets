<?php

function factorielle($n){
    if ($n==1){
        return 1;
    }

    else{
        return $n*factorielle($n-1);
    }
}

$nombre=readline("entre un nombre ");
echo "Le factorielle de votre nombre est : ".factorielle($nombre);