<?php

$notes=[];

for ($i=0;$i<=8;$i++) {

    $notes[$i]=readline("Entrer la note numéro $i :");
}

print_r($notes);