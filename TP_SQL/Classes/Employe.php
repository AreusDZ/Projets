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



    public function getNoEmploye():int{
        return $this ->noEmploye;
    }

    public function setNoEmploye(int $newNoEmploye) :self{
        $this->noEmploye = $newNoEmploye;
        return $this;
    }

    public function getNom() : string{
        return $this->nom;
    }

    public function setNom(string $newNom): self{
        $this->nom = $newNom;
        return $this;
    }
    public function getPrenom() : string{
        return $this->prenom;
    }

    public function setPrenom(string $newPrenom): self{
        $this->prenom = $newPrenom;
        return $this;
    }
    public function getEmploi() : string{
        return $this->emploi;
    }

    public function setEmploi(string $newEmploi): self{
        $this->emploi = $newEmploi;
        return $this;
    }
    public function getEmbauche() : string{ // passer le format en dateTime dans la classe employe et gérer le format exact avec l'option format
        return $this->embauche;
    }

    public function setEmbauche(string $newEmbauche): self{
        $this->embauche = $newEmbauche;
        return $this;
    }
    public function getSalaire() : int{
        return $this->salaire;
    }

    public function setSalaire(int $newSalaire): self{
        $this->salaire = $newSalaire;
        return $this;
    }
    public function getCommission() : int{
        return $this->commission;
    }

    public function setCommission(int $newCommission): self{
        $this->commission = $newCommission;
        return $this;
    }
    public function getNoServ() : int{
        return $this->noServ;
    }

    public function setNoServ(int $newNoServ): self{
        $this->noServ = $newNoServ;
        return $this;
    }
    public function getNoSup() : int{
        return $this->noSup;
    }

    public function setNoSup(int $newNoSup): self{
        $this->noSup= $newNoSup;
        return $this;
    }
    public function __toString() :string
    {
        return " [noEmploye] :" . $this->noEmploye . 
        " [nom] :" . $this->nom . " [prenom] :" . $this->prenom . " [emploi] :" . $this->emploi
        . " [embauche] :" . $this->embauche. " [salaire] :" . $this->salaire. " [commission] :" . $this->commission
        . " [noServ] :" . $this->noServ . " [noSup] :" . $this->noSup;
    }
}