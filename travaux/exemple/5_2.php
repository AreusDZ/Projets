<?php

$n=0;
while($n<10 || $n>20){
    $n=readline("entrer un nombre entre 10 et 20 "); 
    if($n<10) {
        echo "plus grand";
    }
    elseif($n>20){
        echo "plus petit !";
    }
    else{
        echo "BRAVO !!";
    }
}