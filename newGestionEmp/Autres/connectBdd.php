<?php 

//FUNCTION DE CONNEXION
function ConnectBdd()
    {
        $db = new mysqli('localhost','samir','samsgbd','afpa_test');
        return $db;
    }
    
    
?>