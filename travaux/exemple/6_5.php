<?php

$N[0]=1;
echo "$N[0]";

for ($i=1;$i<=6;$i++) {

    $N[$i]=$N[$i-1]+2;
}

print_r($N);