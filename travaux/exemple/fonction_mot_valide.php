<?php
function motValide($c){
    $mot_faux=false;
    $lettre1=$c[0];
    $lettre2=$c[1];

    if(ctype_upper($lettre1) && ctype_upper($lettre2)){
       for($i=2;$i<=strlen($c);$i++){
           if(ctype_lower($c[$i])){
               $mot_faux=true;
           }
       }
    }
    if(ctype_lower($lettre1)){
        for($i=1;$i<=strlen($c);$i++){
            if(ctype_upper($c[$i])){
                $mot_faux=true;
            }
        }
     }
     if(ctype_upper($lettre1) && ctype_lower($lettre2)){
        for($i=2;$i<=strlen($c);$i++){
            if(ctype_upper($c[$i])){
                $mot_faux=true;
            }
        }
     }
     if($mot_faux){
        return ("ko");
     }
     else{
         return ("ok");
     }
}

 $c=readline("Entre une chaine de caractère ");
// ctype_upper() Vérifie si toute la chaine est en majuscule
// ctype_lower() Vérifie si toute la chaine est en minuscule

echo motValide($c);