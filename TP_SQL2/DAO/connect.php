<?php 

//FUNCTION DE CONNEXION
function bddConnect()
    {
        $db = new mysqli('localhost','samir','samsgbd','afpa_test');
        return $db;
    }
    
    
?>