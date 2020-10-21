<?php

$heure=readline("saisir les heures ");
$minute=readline("saisir les minutes ");

$minute++;

if($minute==60){
    $minute=0;
    $heure++;

    if($heure==24){
        $heure=0;
        
    }
   
}

echo"Dans une minute il sera $heure heure(s), $minute minute(s)"; 



