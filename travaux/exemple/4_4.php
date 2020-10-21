<?php

$n=readline("entrer le nombre de photocopies ");

if ($n<=10){
$p=$n*0.1;
}

elseif($n<=30){
    $p=10*0.1+($n-10)*0.09;
}

else{
    $p=10*0.1+20*0.09+($n-30*0.08);
}

echo"le prix total est: $p";