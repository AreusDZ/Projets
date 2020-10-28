<?php
include_once("Personne.php");

class Employe extends Personne {

    protected $salaire;

    public function __construct(string $id,$nom,$prenom,$salaire)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom; 
        $this->salaire = $salaire;
    }

    public function getSalaire():int
    {
        return $this->salaire;
    }

    public function setSalaire($salaire):self
    {
        $this->salaire = $salaire;

        return $this;
    }
    public function __toString() :string
    {
       return parent::__toString() . " [salaire] :" . $this->salaire;
    }
}