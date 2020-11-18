<?php 
    include_once '../Class/Employe.php';
    include_once '../Autres/ConnectBdd.php';
    include_once '../Class/Interface.php';

    class Employe_mysqli_DAO implements commonFunction{

        public function searchAll() :Array {
            //* TRAITEMENT AJOUT
            $dbServ=ConnectBdd();
            $requestSelectEmp = $dbServ->prepare("SELECT * FROM  employes");
            $requestSelectEmp->execute();
            $rs   = $requestSelectEmp->get_result();
            $dataEmp = $rs->fetch_all(MYSQLI_ASSOC);

            $rs->free();
            $dbServ->close();

            return $dataEmp;
        }
//-----------------------fonction de suppression-------------------------------------
        public function delete(Int $no_emp) :Void {
            //* TRAITEMENT SUPRESSION
            $dbServ=ConnectBdd();
            
            //*REQUETE SQL DEL
            $DeleteRequest = $dbServ->prepare("DELETE FROM employes WHERE no_emp= ?");
            $DeleteRequest->bind_param("i", $no_emp);

            //*VERIF REQUETE SQL
            if ($DeleteRequest->execute()) {
                ?><script>alert("Delete employes ok");</script><?php
            } else {
                ?><script>alert("Erreur lors de la suppression d'employes");</script><?php
            }
            
            $dbServ->close();
        }

//-----------------------fonction de modification-------------------------------------
        public static function modifyEmployes($objet) 
    {

        $no_emp = $objet->getNoemploye();
        $nom = $objet->getNom();
        $prenom = $objet->getPrenom();
        $emploi = $objet->getEmploi();
        $embauche = $objet->datetimeToString($objet->getEmbauche());  
        $salaire = $objet->getSalaire();
        $commission = $objet->getCommission();
        $no_serv = $objet->getNoserv();
        $sup = $objet->getNosup();

        $db=ConnectBdd();
        $stmt = $db -> prepare("UPDATE employes set nom=?,prenom=?,emploi=?,embauche=?,salaire=?,commission=?,no_serv=?,sup=?  WHERE no_emp= ? " );
        $stmt->bind_param("ssssdiiii",$nom,$prenom,$emploi,$embauche,$salaire,$commission,$no_serv,$sup,$no_emp);
       
        if ($stmt->execute()) {
            ?><script>alert("Modif employes ok");</script><?php
        } else {
            ?><script>alert("Erreur lors de la modifcation d'employes");</script><?php
        }

        $db -> close();
       

    }

//-----------------------fonction d'ajout-------------------------------------
    public static function addEmployes($objet) 
    {
        $no_emp = $objet->getNoemploye();
        $nom = $objet->getNom();
        $prenom = $objet->getPrenom();
        $emploi = $objet->getEmploi();
        $embauche = $objet->datetimeToString($objet->getEmbauche());  
        $salaire = $objet->getSalaire();
        $commission = $objet->getCommission();
        $no_serv = $objet->getNoserv();
        $sup = $objet->getNosup();

        $db=ConnectBdd();
        $stmt = $db -> prepare ("INSERT INTO employes VALUES( ? , ?  , ?  , ?  , ?  , ?  , ?  ,?  ,? )" );
        $stmt->bind_param("issssiiii", $no_emp ,$nom,$prenom,$emploi,$embauche,$salaire,$commission,$no_serv,$sup);
        
        if($stmt->execute()){
            ?><script>alert("Ajout employes ok");</script><?php
        }else{
            ?><script>alert("Erreur lors de l'ajout d'employes en base de données");</script><?php
        }

        $db->close();

    }


//-----------------------Rechercher par no_emp-------------------------------------
    public function searchById(String $no_emp) :?Array{
        //*CONNECT DB
        $dbServ = ConnectBdd();

        //*SEARCH REQUEST
        $selectRequest = $dbServ->prepare("SELECT * FROM employes WHERE no_emp = ?");
        $selectRequest->bind_param("i", $no_emp);
        $selectRequest->execute();
        $rs   = $selectRequest->get_result();
        $data = $rs->fetch_array(MYSQLI_ASSOC);

        //* Close connection
        $rs->free();
        $dbServ->close();

        return $data;
    }

//-----------------------Rechercher si supérieur-------------------------------------
    public function selectSup() :Array {
        //*CONNECT DB
        $dbServ = ConnectBdd(); 

        //*SEARCH REQUEST
        $selectSupRequest = $dbServ->prepare("SELECT DISTINCT e.no_emp FROM `employes` AS e INNER JOIN `employes` AS e1 WHERE e.no_emp=e1.sup");
        $selectSupRequest->execute();
        $rs   = $selectSupRequest->get_result();
        $data = $rs->fetch_all(MYSQLI_ASSOC);

        //* Close connection
        $rs->free();
        $dbServ->close();

        return $data;
    }

}