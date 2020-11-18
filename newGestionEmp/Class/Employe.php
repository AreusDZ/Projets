<?php

class Employe {

    private $noEmploye;
    private $nom;
    private $prenom;
    private $emploi;
    private $embauche;
    private $salaire;
    private $commission;
    private $noServ;
    private $noSup;


 //* ---------------------------Numéro employé-------------------------------
    public function getNoEmploye():int{
        return $this ->noEmploye;
    }

    public function setNoEmploye(int $newNoEmploye) :self{
        $this->noEmploye = $newNoEmploye;
        return $this;
    }


//* ---------------------------Nom employé-------------------------------
    public function getNom() : string{
        return $this->nom;
    }

    public function setNom(string $newNom): self{
        $this->nom = $newNom;
        return $this;
    }

//* ---------------------------Prenom employé-------------------------------
    public function getPrenom() : string{
        return $this->prenom;
    }

    public function setPrenom(string $newPrenom): self{
        $this->prenom = $newPrenom;
        return $this;
    }


//* ---------------------------Emploi de l'employé-------------------------------
    public function getEmploi() : string{
        return $this->emploi;
    }

    public function setEmploi(string $newEmploi): self{
        $this->emploi = $newEmploi;
        return $this;
    }

    //* ---------------------------Date d'embauche employé-------------------------------
    public function getEmbauche() :?DateTime{ 
        return $this->embauche;
    }

    public function setEmbauche(string $newEmbauche): self{
        $dateEmb = new datetime($newEmbauche);
        $this->embauche = $dateEmb;
        return $this;
    }


//* ---------------------------Salaire employé-------------------------------
    public function getSalaire() : Float{
        return $this->salaire;
    }

    public function setSalaire(float $newSalaire): self{
        $this->salaire = $newSalaire;
        return $this;
    }


//* ---------------------------Commission employé-------------------------------
    public function getCommission() : ?int{
        return $this->commission;
    }

    public function setCommission(?Float $newCommission): self{
        $this->commission = $newCommission;
        return $this;
    }


//* ---------------------------Numéro de service de l'employé-------------------------------
    public function getNoServ() : int{
        return $this->noServ;
    }

    public function setNoServ(int $newNoServ): self{
        $this->noServ = $newNoServ;
        return $this;
    }

//* ---------------------------Numéro de supérieur-------------------------------
    public function getNoSup() : int{
        return $this->noSup;
    }

    public function setNoSup(int $newNoSup): self{
        $this->noSup= $newNoSup;
        return $this;
    }



//*Convert datetime -> String
    public function datetimeToString($datetime) :?String {
    return $dateToString = $datetime->format('Y-m-d');
}


//* ---------------------------Function to_string-------------------------------
    public function __toString() :string
    {
        return " [noEmploye] :" . $this->noEmploye . 
        " [nom] :" . $this->nom . " [prenom] :" . $this->prenom . " [emploi] :" . $this->emploi
        . " [embauche] :" . $this->embauche. " [salaire] :" . $this->salaire. " [commission] :" . $this->commission
        . " [noServ] :" . $this->noServ . " [noSup] :" . $this->noSup;
    }
}