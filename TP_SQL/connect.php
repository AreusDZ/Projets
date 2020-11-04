<?php 

//FUNCTION DE CONNEXION
function bddConnect()
    {
        $db=mysqli_init();
        mysqli_real_connect($db,'localhost','samir','samsgbd','afpa_test');
        return $db;
    }
    
    
?>