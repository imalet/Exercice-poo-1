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

    public function verifNom($nom)
    {
        if (!is_string($nom)) {
            echo "Désolé mon frere mais ca doit etre une chaine de caractere OYOKI ?";
        } else {
            return $nom;
        }
    }

    public function verifPrenom($prenom)
    {
        if (!is_string($prenom)) {
            echo "Désolé mon frere mais Lé PRENOM ca doit etre une chaine de caractere OYOKI ?";
        } else {
            return $prenom;
        }
    }

    public function verifMatricule($matricule)
    {
        return htmlspecialchars($matricule);
    }
}
