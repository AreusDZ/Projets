<?php

function nbrCaractere($chaine,$caractere){
    $cpt=0;
    for ($i=0; $i<strlen($chaine); $i++){
        if ($chaine[$i]==$caractere) {
            $cpt++;
        }
    }
    return $cpt;
}

$ch=readline("Entre une chaine de caratère ");
$c=readline("Entre un caractère à rechercher dans cette chaine ");

echo "Le caractère ".$c." apparait ".nbrCaractere($ch,$c)." fois dans la chaine de caractère : ".$ch ;