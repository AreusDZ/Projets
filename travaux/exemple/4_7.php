<?php
$age=readline("entrer l'age ");
$perm=readline("entrer le nombre d'années de permis ");
$acc=readline("entrer le snombre d'accidents ");
$assur=readline("entrer le nombre d'années d'assurance ");
$c1=false;
$c2=false;
$c3=false;

if ($age>=25) {
    $c1=true;
}
if ($perm>=2) {
    $c2=true;
}
if ($assur>=1) {
    $c3=true;
}

if(!$c1 && !$c2){
    if($acc==0) {
        $situ="rouge";
    }
    else{
        $situ="refusé";
    }

}

if((!$c1 && $c2) || ($c1 && !$c2)) {
    if($acc==0) {
        $situ="orange";
    }
    elseif($acc==1){
        $situ="rouge";
    }
    else{
        $situ="refusé";
    }
}

else{
    if($acc==0){
        $situ="vert";
        
    }
    elseif($acc==1){
        $situ="orange";
        } 
        elseif($acc==2){
            $situ="rouge";
        }
            else{
                $situ="refusé";
            }
}

if($c3) {
    if ($situ=="rouge"){
        $situ="orange";
    }
        elseif ($situ=="orange"){
            $situ="orange";
        }
            elseif ($situ=="vert"){
                $situ="bleu";
            }

}

echo "votre situation : $situ";