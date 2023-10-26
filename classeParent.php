<?php

class Personne
{
    public $nom;
    public $prenom;
    public $matricule;

    function __construct($nom, $prenom, $matricule)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->matricule = $matricule;
    }

    function presenter()
    {
    }

    // Getters
    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getMatricule()
    {
        return $this->matricule;
    }

    // Setters
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }
}