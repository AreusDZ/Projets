<?php

$s=readline("entrer le sex ");
$a=readline("entrer l'age ");
$c1=false;
$c2=false;

if($s=="M" && $a>20) {
    $c1=true;
}

if($s=="F" && ($a>18 && $a<35)) {
    $c2=true;
}

if ($c1 || $c2) {
    echo "imposable";

}
else{
    echo "non-imposable";
}
