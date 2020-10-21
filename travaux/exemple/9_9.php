<?php
function position($alpha, $a){
    $tabAlpha= str_split($alpha);
    $n= count($tabAlpha);
    for ($i=0; $i<$n; $i++) {
       if ($alpha[$i]==$a){
           return $i;
       } 
   }return -1;
}

function chiffrer($phrase, $mot){
    $alpha = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $f= strlen($phrase);
    $g= strlen($mot);
    for ($i=0; $i<$f; $i++){
                     
        $p=$i% $g;
        $b= position($alpha, $mot[$p]);
        $c= position ($alpha, $phrase[$i]);
        $h= $b + $c;
        if ($h>26){
            $h=$h%26;
            $phrase[$i]=$alpha[$h];
            } 
        else $phrase[$i]=$alpha[$h];
    }
    return $phrase;
}

$phrase= readline("Saisir une phrase : ");
$mot = readline("saisir un mot clé : ");
echo chiffrer($phrase, $mot);









