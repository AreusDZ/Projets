<?php 

include('connect.php'); 


class EmployeMysqliDAO {

      // générer les td du tableau HTML
    public static function generateTab()

     { 
        $db=bddConnect();
        $stmt=$db->prepare("SELECT * FROM employes");
        $stmt->execute();
        $rs=$stmt->get_result();
        $data = $rs->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    // FONCTION AJOUT
    public static function addEmployes($objet) 
    {
        $no_emp = $objet->getNoemploye();
        $nom = $objet->getNom();
        $prenom = $objet->getPrenom();
        $emploi = $objet->getEmploi();
        $embauche = $objet->getEmbauche();  // passer le format en dateTime dans la classe employe et gérer le format exact avec l'option format
        $salaire = $objet->getSalaire();
        $commission = $objet->getCommission();
        $no_serv = $objet->getNoserv();
        $sup = $objet->getNosup();

        $db=bddConnect();
        $stmt = $db -> prepare ("INSERT INTO employes VALUES( ? , ?  , ?  , ?  , ?  , ?  , ?  ,?  ,? )" );
        $stmt->bind_param("issssiiii", $no_emp ,$nom,$prenom,$emploi,$embauche,$salaire,$commission,$no_serv,$sup);
        $stmt->execute();
        $res=$stmt->get_result();
        $query="INSERT INTO employes VALUES( $no_emp , '$nom' , '$prenom' , '$emploi' , '$embauche' , $salaire , $commission , $no_serv , $sup)";
        echo $query;
        $db -> close();
        return $res;

    }

    // FONCTION SUPPRESSION
    public static function deleteEmployes($no_emp) 
    {

       

        $db=bddConnect();
        $stmt = $db -> prepare ("DELETE FROM employes WHERE no_emp= ? " );
        $stmt->bind_param("i",$no_emp);
        $stmt->execute();
        $requete=$stmt->get_result();
        $db -> close();
        return $requete;
    }

    // FONCTION MODIFIER
    public static function modifyEmployes($objet) 
    {

        $no_emp = $objet->getNoemploye();
        $nom = $objet->getNom();
        $prenom = $objet->getPrenom();
        $emploi = $objet->getEmploi();
        $embauche = $objet->getEmbauche();  // passer le format en dateTime dans la classe employe et gérer le format exact avec l'option format
        $salaire = $objet->getSalaire();
        $commission = $objet->getCommission();
        $no_serv = $objet->getNoserv();
        $sup = $objet->getNosup();

        $db=bddConnect();
        $stmt = $db -> prepare("UPDATE employes set nom=?,prenom=?,emploi=?,embauche=?,salaire=?,commission=?,no_serv=?,sup=?  WHERE no_emp= ? " );
        $stmt->bind_param("ssssdiiii",$nom,$prenom,$emploi,$embauche,$salaire,$commission,$no_serv,$sup,$no_emp);
        $stmt->execute();
        $rm=$stmt->get_result();
        $query="UPDATE employes set nom=?,prenom=?,emploi=?,embauche=?,salaire=?,commission=?,no_serv=?,sup=?  WHERE no_emp= ? ";
        echo $query;
        $db -> close();
        return $rm;
    }

    // FONCTION POUR QUE LE BOUTTON SUPPRIMER N'APPARAISSE QUE QUAND LE SERVICE EST VIDE

    public static function employeExist($num)  
    {
        $db=bddConnect();
        $stmt = $db -> prepare("SELECT * from employes as e INNER JOIN employes as e1 on e.no_emp=e1.sup  WHERE e.no_emp=$num ");
        $stmt->execute();
        $rm=$stmt->get_result();
        $data=mysqli_fetch_all($rm,MYSQLI_ASSOC); 
        if(!empty($data)){

             return true;
        }
  
        
    }  

}


?>