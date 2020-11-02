<?php
include_once("Personne.php");

class Developpeur extends Personne {

    private $specialite;

    public function __contruct(int $id, string $prenom, string $nom, string $mail, 
                                string $telephone, float $salaire, string $specialite ){
        parent::__construct($id, $prenom, $nom, $mail, $telephone, $salaire);
        $this->specialite = $specialite;
    }

    public function calculerSalaire() :float {
        return $this->salaire * 1.2;
    }

    public function afficher() : string{
        return <<<AFFICHE
       Je suis {$this->prenom} {$this->nom}, je suis développeur {$this->specialite}.
AFFICHE;
   }

    /**
     * Get the value of specialite
     */ 
    public function getSpecialite() : string
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite(string $specialite) : self
    {
        $this->specialite = $specialite;

        return $this;
    }
}
