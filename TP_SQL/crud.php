<?php 

    include('connect.php');

    // FONCTION AJOUT
    function addEmployes($tableau) 
    {
        $no_emp=$tableau['no_emp'];
        $nom=$tableau['nom']?$tableau['nom']:'NULL'; // Pour gérer le cas ou le post du nom est vide, on remplace par NULL
        $prenom=$tableau['prenom']?$tableau['prenom']:'NULL';
        $emploi=$tableau['emploi']?$tableau['emploi']:'NULL';
        $embauche=$tableau['embauche']?$tableau['embauche']:'NULL';
        $salaire=$tableau['salaire']?$tableau['salaire']:'NULL';
        $commission=$tableau['commission']?$tableau['commission']:'NULL';
        $no_serv=$tableau['no_serv'];
        $sup=$tableau['sup']?$tableau['sup']:'NULL';

        $db=bddConnect();
        $rs=mysqli_query($db,"INSERT INTO employes VALUES( $no_emp , '$nom' , '$prenom' , '$emploi' , '$embauche' , $salaire , $commission , $no_serv , $sup)" );
        mysqli_close($db);
        return $rs;

    }

    // FONCTION SUPPRESSION
    function deleteEmployes($tableau) 
    {

        $no_emp = $tableau['no_emp'];

        $db=bddConnect();
        $requete=mysqli_query($db,"DELETE FROM employes WHERE no_emp= $no_emp " );
        mysqli_close($db);
        return $requete;
    }

    // FONCTION MODIFIER
    function modifyEmployes($tableau) 
    {

        $no_emp=$tableau['no_emp'];
        $nom=$tableau['nom']?$tableau['nom']:'NULL'; // Pour gérer le cas ou le post du nom est vide, on remplace par NULL
        $prenom=$tableau['prenom']?$tableau['prenom']:'NULL';
        $emploi=$tableau['emploi']?$tableau['emploi']:'NULL';
        $embauche=$tableau['embauche']?$tableau['embauche']:'NULL';
        $salaire=$tableau['salaire']?$tableau['salaire']:'NULL';
        $commission=$tableau['commission']?$tableau['commission']:'NULL';
        $no_serv=$tableau['no_serv'];
        $sup=$tableau['sup']?$tableau['sup']:'NULL';

        $db=bddConnect();
        $rm=mysqli_query($db,"UPDATE employes set nom='$nom',prenom='$prenom',emploi='$emploi',embauche='$embauche',salaire=$salaire,commission=$commission,no_serv=$no_serv,sup=$sup  WHERE no_emp= $no_emp " );
        mysqli_close($db);
        return $rm;
    }







?>