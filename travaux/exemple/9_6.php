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
    $pos=0;
    for($i=0; $i<=strlen($mot)-1; $i++){
        $pos=trouve($tableau,$mot[$i]);
       if($mot[$i]=="Z"){
        $mot[$i]="A";
       }
       else{
        $mot[$i]=$tableau[$pos+1];
       }
    }
    return $mot;
}

$mot=readline("Entre un mot ");
echo crypter($mot);
