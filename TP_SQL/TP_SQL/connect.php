<?php 

//FUNCTION DE CONNEXION
function bddConnect()
    {
        $db=mysqli_init();
        mysqli_real_connect($db,'localhost','samir','samsgbd','employes_service');
        return $db;
    }
    
    
?>