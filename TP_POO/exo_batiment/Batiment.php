<?php

class Batiment {

    private $adresse;
    private $superficie;

    public function __construct(string $adresse)
    {

        $this->adresse = $adresse;
      
        
    }


    public function getAdresse():string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse):self
    {
        $this->adresse = $adresse;

        return $this;
    }


    public function getSuperficie():int
    {
        return $this->superficie;
    }

    
    public function setSuperficie(int $superficie):self
    {
        $this->superficie = $superficie;

        return $this;
    }
    public function __toString() :string
    {
        return " [adresse] :" . $this->adresse . 
        " [superficie] :" . $this->superficie ."m2";
    }
}