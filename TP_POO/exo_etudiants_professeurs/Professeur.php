<?php

include_once("Employe.php");

class Professeur extends Employe {

    private $specialite;

    public function __construct(string $id,$nom,$prenom,$salaire,$specialite)
    {
        parent::__construct($id,$nom,$prenom,$salaire); 
        $this->specialite = $specialite;
    }

    public function getSpecialite():string
    {
        return $this->specialite;
    }

    public function setSpecialite($specialite):self
    {
        $this->specialite = $specialite;

        return $this;
    }
    public function __toString() :string
    {
       return parent::__toString() . " [specialite] :" . $this->specialite;
    }
}