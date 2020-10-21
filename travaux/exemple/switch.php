<?php 
$a=readline("Entre un prénom ");
switch ($a) {
    case "Samir" : {
        echo"Sam's";
        break;
    }
    case "Mohamed" : {
        echo"Tounsi";
        break;
    }
    case "Perrine" : {
        echo"La madre";
        break;
    }
    case "Aurélien" : {
        echo"Le garagiste";
        break;
    }
    case "Cindy" : {
        echo"C1di";
        break;
    }
    case "Maxime" : {
        echo"Maxou le boss";
        break;
    }

    default : {
        echo"$a ne fait pas partie de la team";
        break;
    }

}