<?php

class Personne {

    protected $id;
    protected $nom;
    protected $prenom;

    public function __construct(string $id,$nom,$prenom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom; 
    }
    

    public function getId():int
    {
        return $this->id;
    }

    public function setId($id):self
    {
        $this->id = $id;

        return $this;
    }

 
    public function getNom():string
    {
        return $this->nom;
    }


    public function setNom($nom):self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom():string
    {
        return $this->prenom;
    }

    public function setPrenom($prenom):self
    {
        $this->prenom = $prenom;

        return $this;
    }
    public function __toString() :string
    {
        return " [id] :" . $this->id . 
        " [nom] :" . $this->nom .  " [prenom] :" . $this->prenom;
    }
}