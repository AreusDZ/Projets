<?php

include_once 'Employe.php';

class Patron extends Employe
{
    private static $chiffreAffaire = 100000;
    private $pourcentage;

    // constrcuteur

    public function getSalaire(): ?float
    {
        return self::$chiffreAffaire * $this->pourcentage / 100;
    }
    
    public function __toString() :string
    {
        return " [matricule] :" . parent::getMatricule() . 
        " [nom] :" . parent::getNom() . " [prenom] :" . parent::getPrenom()." [CA] :" . self::$chiffreAffaire ." [pourcentage] :" . $this->pourcentage
        ." [salaire] :" . $this->getSalaire();
    }


    /**
     * Get the value of pourcentage
     */ 
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * Set the value of pourcentage
     *
     * @return  self
     */ 
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }
}