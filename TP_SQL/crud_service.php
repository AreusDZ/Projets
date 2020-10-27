<?php
    include('connect.php'); 

    // FONCTION AJOUT
    function addService($tableau)

    {

    $service=$tableau['service']?$tableau['service']:'NULL';
    $ville=$tableau['ville']?$tableau['ville']:'NULL'; // Pour gérer le cas ou le post du nom est vide, on remplace par NULL
    $no_serv=$tableau['no_serv'];

    $db=bddConnect();
    $rs=mysqli_query($db,"INSERT INTO service VALUES( $no_serv , '$service' , '$ville')" );
    mysqli_close($db);
    return $rs;

    } 

    // FONCTION SUPPRESSION
    function deleteService($tableau)

    {

    $no_serv = $tableau['no_serv'];

    $db=bddConnect();
    $rd=mysqli_query($db,"DELETE FROM service WHERE no_serv= $no_serv " );
    mysqli_close($db);
    return $rd;

    }

    // FONCTION SUPPRESSION
    function modifyService($tableau)

    {

    $service=$tableau['service']?$tableau['service']:'NULL';
    $ville=$tableau['ville']?$tableau['ville']:'NULL'; // Pour gérer le cas ou le post du nom est vide, on remplace par NULL
    $no_serv=$tableau['no_serv'];

    $db=bddConnect();
    $rm=mysqli_query($db,"UPDATE service set service='$service',ville='$ville' WHERE no_serv=$no_serv " );
    mysqli_close($db);
    return $rm;

    }



?>