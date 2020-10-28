<?php
include_once('Batiment.php');


class Maison extends Batiment {

    private $nbPieces;
    
    public function __construct(string $adresse, int $superficie, int $nbPieces)
    {

        parent::__construct($adresse);         // Appeler les attributs du constructeur parent
        $this->setSuperficie($superficie);  // car ils sont en "private" donc on récupère le set ou on les mets en "protected"
        $this->nbPieces = $nbPieces;
 
    }

    public function getNbPieces():int
    {
        return $this->nbPieces;
    }

    public function setNbPieces($nbPieces):self
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    public function __toString() :string
    {
        return " [nbPieces] :" . $this->nbPieces . parent::__toString();  // car ils sont en "private" donc on récupère lea fonction toString de la classe parent  
    }
}