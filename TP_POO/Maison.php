<?php
include_once('Batiment.php');


class Maison extends Batiment {

    private $nbPieces;
    
    public function __construct(string $adresse, int $superficie, int $nbPieces)
    {

        $this->adresse = $adresse;
        $this->superficie = $superficie;
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
        return " [nbPieces] :" . $this->nbPieces . " [adresse] :" . $this->adresse . 
        " [superficie] :" . $this->superficie ."m2";
    }
}