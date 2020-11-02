<?php

include_once 'Employe.php';
include_once 'DateUtility.php';

class Ouvrier extends Employe {

    private $dateEntree;
    private static $smic = 2500;
    // const SAL_MAX = 5000;

    // Constructuer par défaut

    public function getSalaire() : ?float{
        $anciente = DateUtility::getDiferenceInYears(new DateTime(), $this->dateEntree);
        $salaire = Ouvrier::$smic + $anciente*100;
        // return min(self::$smic*2, $salaire); // solution 2
        if($salaire > Ouvrier::$smic * 2) {  // ou SAL_MAX
            return Ouvrier::$smic * 2;  // retourne SAL_MAX
        } else {
            return $salaire;
        }
    }

    public function __toString() :string
    {
        return " [matricule] :" . parent::getMatricule() . 
        " [nom] :" . parent::getNom() . " [prenom] :" . parent::getPrenom() 
        ." [salaire] :" . $this->getSalaire();
    }


    /**
     * Get the value of dateEntree
     */ 
    public function getDateEntree() : DateTime
    {
        return $this->dateEntree;
    }

    /**
     * Set the value of dateEntree
     *
     * @return  self
     */ 
    public function setDateEntree(DateTime $dateEntree)
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }
}