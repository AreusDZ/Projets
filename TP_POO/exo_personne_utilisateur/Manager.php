<?php
include_once("Personne.php");

class Manager extends Personne {
    private $service;


    public function __construct($id, $nom, $prenom,
    $mail, $telephone, $salaire,$service)
    {
     //$this->setPrenom($personne->getPrenom());
     parent::__construct($id, $nom, $prenom,
                         $mail, $telephone, $salaire);   
     
     $this->service = $service; 
        
    }

    public  function calculerSalaire(){
        return $this->getSalaire()*1.35;
    }
    
    public function affiche() : void {
        echo $this;
    }
    /**
     * Get the value of specialite
     */ 

    /**
     * Get the value of service
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }
}
