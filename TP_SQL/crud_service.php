<?php
    include('connect.php'); 
    

// générer le tableau
    function generateTab()

    { 
       $db=bddConnect();
       $stmt=$db->prepare("SELECT * FROM service");
       $stmt->execute();
       $rs=$stmt->get_result();
       $data = $rs->fetch_all(MYSQLI_ASSOC);
       return $data;
   }

    // FONCTION AJOUT
    function addService($objet)

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
    function deleteService($noserv)

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
    function modifyService($objet)

    {
        $noserv = $objet->getNoserv();
        $service = $objet->getService();
        $ville = $objet->getVille();

        $db=bddConnect();
        $rm= $stmt = $db -> prepare("UPDATE service set service='$service',ville='$ville' WHERE noserv=$noserv " );
        $stmt->bind_param("ssi",$service,$ville,$noserv);
        $stmt->execute();
        $rm=$stmt->get_result();
        $db -> close();
        return $rm;

    }

  // FONCTION POUR QUE LE BOUTTON SUPPRIMER N'APPARAISSE QUE QUAND LE SERVICE EST VIDE
  function serviceExist($num)  
  {
      $db=bddConnect();
      $stmt = $db -> prepare("SELECT * from employes as e INNER JOIN service as s on e.no_serv=s.noserv  WHERE e.no_serv=$num ");
      $stmt->execute();
      $rm=$stmt->get_result();
      $data=mysqli_fetch_all($rm,MYSQLI_ASSOC); 
      if(!empty($data)){

           return true;
      }

      
  }  

?>