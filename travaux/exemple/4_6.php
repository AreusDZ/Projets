<?php

$a=readline("entrer le score du candidat 1 ");
$b=readline("entrer le score du candidat 2 ");
$c=readline("entrer le score du candidat 3 ");
$d=readline("entrer le score du candidat 4");
$c1=false;
$c2=false;
$c3=false;
$c4=false;

if($a>50) {
    $c1=true;
}

if($b<50 || $c>50 || $d>50) {
    $c2=true;
}

if ($a>=$b && $a>=$c && $a>=$d) {
    $c3=true;

}
if ($a>=12.5 ) {
    $c4=true;

}

if ($c1) {
    echo "élu au premier tour";

}
elseif ($c2 || !$c4) {
    echo "battu";

}
elseif ($c3) {
    echo "ballotage favorable";

}

else{
    echo "ballotage défavorable";
}