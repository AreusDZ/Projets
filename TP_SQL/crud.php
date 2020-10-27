<?php 

    include('connect.php');

    // FONCTION AJOUT
    function addEmployes($tableau) 
    {
        $no_employe=$tableau['no_employe'];
        $nom=$tableau['nom']?$tableau['nom']:'NULL'; // Pour gérer le cas ou le post du nom est vide, on remplace par NULL
        $prenom=$tableau['prenom']?$tableau['prenom']:'NULL';
        $emploi=$tableau['emploi']?$tableau['emploi']:'NULL';
        $embauche=$tableau['embauche']?$tableau['embauche']:'NULL';
        $salaire=$tableau['salaire']?$tableau['salaire']:'NULL';
        $commission=$tableau['commission']?$tableau['commission']:'NULL';
        $no_serv=$tableau['no_serv'];
        $no_sup=$tableau['no_sup']?$tableau['no_sup']:'NULL';

        $db=bddConnect();
        $rs=mysqli_query($db,"INSERT INTO employes VALUES( $no_employe , '$nom' , '$prenom' , '$emploi' , '$embauche' , $salaire , $commission , $no_serv , $no_sup)" );
        mysqli_close($db);
        return $rs;

    }

    // FONCTION SUPPRESSION
    function deleteEmployes($tableau) 
    {

        $no_employe = $tableau['no_employe'];

        $db=bddConnect();
        $requete=mysqli_query($db,"DELETE FROM employes WHERE no_employe= $no_employe " );
        mysqli_close($db);
        return $requete;
    }

    // FONCTION MODIFIER
    function modifyEmployes($tableau) 
    {

        $no_employe=$tableau['no_employe'];
        $nom=$tableau['nom']?$tableau['nom']:'NULL'; // Pour gérer le cas ou le post du nom est vide, on remplace par NULL
        $prenom=$tableau['prenom']?$tableau['prenom']:'NULL';
        $emploi=$tableau['emploi']?$tableau['emploi']:'NULL';
        $embauche=$tableau['embauche']?$tableau['embauche']:'NULL';
        $salaire=$tableau['salaire']?$tableau['salaire']:'NULL';
        $commission=$tableau['commission']?$tableau['commission']:'NULL';
        $no_serv=$tableau['no_serv'];
        $no_sup=$tableau['no_sup']?$tableau['no_sup']:'NULL';

        $db=bddConnect();
        $rm=mysqli_query($db,"UPDATE employes set nom='$nom',prenom='$prenom',emploi='$emploi',embauche='$embauche',salaire=$salaire,commission=$commission,no_serv=$no_serv,no_sup=$no_sup  WHERE no_employe= $no_employe " );
        mysqli_close($db);
        return $rm;
    }







?>