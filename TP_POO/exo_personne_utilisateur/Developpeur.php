<?php
include_once("Personne.php");

class Developpeur extends Personne {
    private $specialite;

    public function __construct($id, $nom, $prenom,
    $mail, $telephone, $salaire,$specialite)
    {
     //$this->setPrenom($personne->getPrenom());
     parent::__construct($id, $nom, $prenom,
                         $mail, $telephone, $salaire);   
     
     $this->specialite = $specialite; 
      
    }
    public  function calculerSalaire(){
        return $this->getSalaire()*1.20;
    }

    public function affiche() : void {
        echo $this;
    }
    /**
     * Get the value of specialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
    public function __toString()
    {
        return "[prénom] -->". $this->prenom . "[nom] -->" . $this->nom . "[mail] -->" . $this->mail . "[téléphone] -->" . $this->telephone . 
        "[salaire] -->" . $this->salaire . "[specialite] -->" . $this->specialite  ;
    }
}