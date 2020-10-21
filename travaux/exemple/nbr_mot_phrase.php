<?php
function mot_phrase($phrase){
    $espace=" ";
    $nombre_mot=0;
    $i=0;

    do{
        if($phrase[$i]==$espace){
            $nombre_mot++;
        }
        $i++;
    }
    while($i<strlen($phrase));

    return $nombre_mot+1;
}

$phrase=readline("Entre une phrase ");
echo mot_phrase($phrase);