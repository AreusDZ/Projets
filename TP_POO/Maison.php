<?php
include('Batiment.php');


class Maison extends Batiment {

    private $nbPieces;
    
    public function __construct(string $adresse, int $superficie, int $nbPieces){

    }
 
    {
        
    }

    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    public function setNbPieces($nbPieces)
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    public function __toString() :string
    {
        return " [nbPieces] :" . $this->nbPieces;
    }
}