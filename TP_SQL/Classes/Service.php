<?php

class Service {

    private $noServ;
    private $service;
    private $ville;


    public function getNoServ() : int{
        return $this->service;
    }

    public function setNoServ(int $newNoServ): self{
        $this->noServ = $newNoServ;
        return $this;
    }
    public function getVille() : string{
        return $this->ville;
    }

    public function setVille(string $newVille): self{
        $this->ville= $newVille;
        return $this;
    }
    public function getService() : string{
        return $this->service;
    }

    public function setService(string $newService): self{
        $this->service= $newService;
        return $this;
    }
    public function __toString() :string
    {
        return " [noServ] :" . $this->noServ . 
        " [service] :" . $this->service . " [ville] :" . $this->ville;
    }
}