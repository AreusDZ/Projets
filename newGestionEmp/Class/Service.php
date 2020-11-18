<?php

class Service {

    private $noServ;
    private $service;
    private $ville;

 //* ---------------------------Numéro de service-------------------------------
    public function getNoServ() : int{
        return $this->noServ;
    }

    public function setNoServ(int $newNoServ): self{
        $this->noServ = $newNoServ;
        return $this;
    }


//* ---------------------------Ville de service-------------------------------
    public function getVille() : string{
        return $this->ville;
    }

    public function setVille(string $newVille): self{
        $this->ville= $newVille;
        return $this;
    }


//* ---------------------------Service-------------------------------
    public function getService() : string{
        return $this->service;
    }

    public function setService(string $newService): self{
        $this->service= $newService;
        return $this;
    }


//* ---------------------------Function to_string-------------------------------
    public function __toString() :string
    {
        return " [noServ] :" . $this->noServ . 
        " [service] :" . $this->service . " [ville] :" . $this->ville;
    }
}