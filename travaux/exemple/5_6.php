<?php

    $n=readline("entrer un nombre "); 
    $f=1;

    for ($i=2;$i<=$n;$i++) {
        $f*=$i;
    }

    echo "la factorielle est: $f";