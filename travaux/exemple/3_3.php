<?php


function nomsRanges($a,$b,$c){
    if ($a>$b && $b>$c) {
       return true;
        }
        
        else{ 
            return false;
        }
}

$a=readline("saisir la valeur de a ");
$b=readline("saisir la valeur de b ");
$c=readline("saisir la valeur de c ");

if(nomsRanges($a,$b,$c)){
    echo "rangés";
}
else{
    echo "pas rangés";
}
