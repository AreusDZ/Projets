<?php

$notes=[];
$somme=0;
for ($i=0;$i<=8;$i++) {

    $notes[$i]=readline("Entrer la note numéro $i :");
    $somme+=$notes[$i];
}

$moyenne=$somme/9;
echo "la moyenne est " .$moyenne. "\n";
print_r($notes);