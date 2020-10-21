<?php

    $db=mysqli_init();
    mysqli_real_connect($db,'localhost','samir','samsgbd','employes_service');
    $rs=mysqli_query($db,'SELECT  nom,prenom ,no_serv ,salaire ,emploi
    from employes');
    $data=mysqli_fetch_all($rs,MYSQLI_ASSOC); 
    mysqli_free_result($rs); // LIBERER DE L'ESPACE UNE FOIS QUE L'ON A PLUS BESOIN DE LA VARIABLE
    mysqli_close($db);  //ferme manuellement le script 

    
    echo '<pre>';
    print_r($data);
    echo '</pre>'; // BALISE HTML POUR CLASSER LE TABLEAU

   
    //  mysqli_fetch_all — Lit toutes les lignes de résultats dans un tableau

    // mysqli_fetch_array — Retourne une ligne de résultat sous la forme d'un tableau associatif, d'un tableau indexé, ou les deux

    // mysqli_fetch_assoc — Récupère une ligne de résultat sous forme de tableau associatif

    // mysqli_fetch_row — Récupère une ligne de résultat sous forme de tableau indexé
?>