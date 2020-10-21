<?php

function trouve($tableau,$lettre){
    for($i=0; $i<=count($tableau); $i++){
        if ($tableau[$i]==$lettre){
            return $i;
        }
    }

    return -1;

}

function crypter($mot,$decal){
    $tableau=array_combine(range(0,25), range('A','Z'));
    $pos=0;
    for($i=0; $i<strlen($mot); $i++){
        $pos=trouve($tableau,$mot[$i]);
        $mot[$i]=$tableau[($pos+$decal)%26];
    }
    return $mot;
}

$mot=readline("Entre un mot ");
$decal=readline("Entre un décalage ");
echo crypter($mot,$decal);
