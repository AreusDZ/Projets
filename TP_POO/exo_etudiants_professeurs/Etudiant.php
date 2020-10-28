<?php
include_once("Personne.php");

class Etudiant extends Personne {

    private $cne;

    public function __construct(string $id,$nom,$prenom,$cne)
    {
        parent::__construct($id,$nom,$prenom); 
        $this->cne = $cne;
    }

    public function getCne():string
    {
        return $this->cne;
    }

    public function setCne($cne):self
    {
        $this->cne = $cne;

        return $this;
    }
    public function __toString() :string
    {
       return parent::__toString() . " [cne] :" . $this->cne;
    }
}