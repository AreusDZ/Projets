<?php
$t=[];
$nb=readline("Entrez le nombre de valeurs ");

for($i=0; $i<=$nb-1; $i++){

$t[$i]=readline("Entrez le nombre numéro: ".$i. " : \n");

}
$done=true;

for($i=0; $i<=$nb-1; $i++){
    if ($t[$i]!=$t[$i-1]+1){
        $done=false;
    }
}

if($done) {
    echo"les nombres sont consécutifs";
}
else{
    echo"les nombres ne sont pas consécutifs";
}