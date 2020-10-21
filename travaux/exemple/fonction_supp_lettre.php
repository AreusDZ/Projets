<?php

function supp_lettre($mot,$x){

    $taille_phrase=strlen($mot);
    $moitie1=substr($mot,0,$x);
    $moitie2=substr($mot,$x+1,$taille_phrase-$x);
    $moitie1.=$moitie2;
  
    return $moitie1;
    

}

$mot=readline("Entre un mot ");
$x=readline("entre l'indice de la lettre à supprimer ");
echo supp_lettre($mot,$x);