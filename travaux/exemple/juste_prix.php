<?php

$prix=rand(1,1000);
echo "Je génère un nombre aléatoire entre 1 et 1.000, tu as 10 essaies pour trouver le nombre exact. \n";
for ($i=0;$i<=9;$i++){
    $tentative = readline("Entre une tentative : ");
    if ($i == 8) {
    	echo"Il ne vous reste plus qu'un seul essaie ! \n";
    } elseif($i == 9) {
    	echo "Perdu !";
        break;
    }
    if ($prix == $tentative) {
        echo "Bravo !";
        break;
    }
    elseif ($prix < $tentative) {
        echo "Tente ta chance avec un nombre plus petit \n";
    }
    else {
        echo "Tente ta chance avec un nombre plus grand \n";
    }
}