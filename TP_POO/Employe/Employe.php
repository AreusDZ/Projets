<?php

abstract class Employe {

    private $matricule;
    private $nom;
    private $prenom;
    private $dateDeNaissance;

    // Constructeur par défaut

    public abstract function getSalaire() : ?float;

    public function __toString() :string
    {
        return " [matricule] :" . $this->matricule . 
        " [nom] :" . $this->nom . " [prenom] :" . $this->prenom . " [dateDeNaissance] :" . $this->dateDeNaissance;
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of dateDeNaissance
     */ 
    public function getDateDeNaissance() : DateTime
    {
        return $this->dateDeNaissance;
    }

    /**
     * Set the value of dateDeNaissance
     *
     * @return  self
     */ 
    public function setDateDeNaissance(DateTime $dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }
}
?>