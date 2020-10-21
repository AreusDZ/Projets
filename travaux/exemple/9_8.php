<?php

function trouve($tableau,$lettre){
    for($i=0; $i<=count($tableau); $i++){
        if ($tableau[$i]==$lettre){
            return $i;
        }
    }

    return -1;

}

function crypter($mot){
    $tableau=array_combine(range(0,25), range('A','Z'));
    $alphaCle=[];
    for($i=0; $i<=25; $i++) {
    $alphaCle[$i]=readline("Entrez le mot numéro $i : \n");
    }
    // $alphaCle=["H","Y","L","U","J","P","V","R","E","A","K","B","N","D","O","F","S","Q","Z","C","W","M","G","I","T","X"];
    print_r($alphaCle);
    $pos=0;
    for($i=0; $i<strlen($mot); $i++){
        $pos=trouve($tableau,$mot[$i]);
        $mot[$i]=$alphaCle[($pos)];
    }
    return $mot;
}

$mot=readline("Entre un mot ");


echo crypter($mot);
