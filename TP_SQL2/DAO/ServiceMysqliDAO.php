<?php
    include('connect.php'); 
    
class ServiceMysqliDAO {

// générer le tableau
   public static function generateTab()

    { 
       $db=bddConnect();
       $stmt=$db->prepare("SELECT * FROM service");
       $stmt->execute();
       $rs=$stmt->get_result();
       $data = $rs->fetch_all(MYSQLI_ASSOC);
       $newTab= array();
        foreach ($data as $value) {
            $service = new service();
            $service -> setNoServ($value['noserv']) -> setService($value['service']) -> setVille($value['ville']);
            array_push($newTab,$service);
        }
        return $newTab;

        

      
   }

    // FONCTION AJOUT
    public static function addService($objet)

    {
      
        $noserv = $objet->getNoserv();
        $service = $objet->getService();
        $ville = $objet->getVille();

        $db=bddConnect();
        $stmt = $db -> prepare("INSERT INTO service VALUES( ? , ?, ?)" );
        $stmt->bind_param("iss",$noserv,$service,$ville);
        $stmt->execute();
        $rs=$stmt->get_result();
        $query="INSERT INTO service VALUES( ? , ?, ?)" ;
        echo $query;
        $db -> close();
        return $rs;

    } 

    // FONCTION SUPPRESSION
    public static function deleteService($noserv)

    {

        $db=bddConnect();
        $stmt = $db -> prepare("DELETE FROM service WHERE noserv= ? " );
        $stmt->bind_param("i",$noserv);
        $stmt->execute();
        $rd=$stmt->get_result();
        $db -> close();
        return $rd;

    }

    // FONCTION Modify
    public static function modifyService($objet)

    {
        $noserv = $objet->getNoServ(); 
        $service = $objet->getService();
        $ville = $objet->getVille();

        $db=bddConnect();
        $rm= $stmt = $db -> prepare("UPDATE service set service=?,ville=? WHERE noserv=? " );
        $stmt->bind_param("ssi",$service,$ville,$noserv);
        $stmt->execute();
        $rm=$stmt->get_result();
        $db -> close();
        return $rm;

    }

  // FONCTION POUR QUE LE BOUTTON SUPPRIMER N'APPARAISSE QUE QUAND LE SERVICE EST VIDE
    public static function serviceExist($num)  
  {
      $db=bddConnect();
      $stmt = $db -> prepare("SELECT * from employes as e INNER JOIN service as s on e.no_serv=s.noserv  WHERE e.no_serv=$num ");
      $stmt->execute();
      $rm=$stmt->get_result();
      $data=$rm->fetch_all(MYSQLI_ASSOC); 
     
      if(!empty($data)){

           return true;
      }

      
  }  
}
?>