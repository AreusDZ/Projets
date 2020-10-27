<?php

class Batiment {

    private $addresse;
    private $superficie;


    public function getAddresse():string
    {
        return $this->addresse;
    }

    public function setAddresse($addresse):string
    {
        $this->addresse = $addresse;

        return $this;
    }


    public function getSuperficie()
    {
        return $this->superficie;
    }

    
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }
    public function __toString() :string
    {
        return " [addresse] :" . $this->addresse . 
        " [superficie] :" . $this->superficie;
    }
}