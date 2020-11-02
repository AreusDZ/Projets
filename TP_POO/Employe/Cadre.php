<?php

include_once 'Employe.php';

class Cadre extends Employe {

    private $indice;



    // constructeur par defaut

    public function getSalaire(): ?float
    {
        switch ($this->indice) {
            case  1  : {
                return 13000;
            }
            case 2 : {
                return 15000;
            }
            case 3 : {
                return 17000;
            }
            case 4 : {
                return 20000;
            }
            default : {
                 return null;
            }
        }
    }
    
    public function __toString() :string
    {
        return " [matricule] :" . parent::getMatricule() . 
        " [nom] :" . parent::getNom() . " [prenom] :" . parent::getPrenom()." [indice] :" . $this->indice 
        ." [salaire] :" . $this->getSalaire();
    }

    /**
     * Get the value of indice
     */ 
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * Set the value of indice
     *
     * @return  self
     */ 
    public function setIndice($indice)
    {
        if($indice < 0 || $indice > 4){
            $this->indice = null; // Erreur à envoyer
        } else {
            $this->indice = $indice;
        }

        return $this;
    }
}