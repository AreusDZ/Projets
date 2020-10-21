<?php

$heure=readline("saisir les heures ");
$minute=readline("saisir les minutes ");
$seconde=readline("saisir les secondes ");

$seconde++;

if($seconde==60){
    $seconde=0;
    $seconde++;

    if($minute==60){
        $minute=0;
        $minute++;
    }

        if($heure==24){
        $heure=0;
        
        }
   
}

echo"Dans une seconde il sera $heure heure(s), $minute minute(s) $seconde seconde(s)"; 
