<?php

function nbrChaineCaractere($phrase,$mot){
    $cpt=0;
   $trouve=false;
    for ($i=0; $i<strlen($phrase);$i++){
        if ($phrase[$i]==$mot[0]) {
          if ($i<strlen($phrase)-1){
              $k=$i+1;
              $trouve=true;
              for($j=1; $j<strlen($mot);$j++) {
                    if($mot[$j] != $phrase[$k]) {
                       
                        $trouve=false;
                        $j=strlen($mot);
                    }
                    $k++;
                }
             
            
            if ($trouve) {
                        $cpt++;
                }
          
        }  
            elseif(strlen($mot)==1){
                        $cpt++;
                    }
                    
       
        } 
           
    }
    return $cpt;
}
 
$ch=readline("Entre une chaine de caratère ");
$c=readline("Entre une chaine de caractère à rechercher dans cette chaine ");

echo "La chaine de caractère ".$c." apparait ".nbrChaineCaractere($ch,$c)." fois dans la chaine de caractère : ".$ch ;