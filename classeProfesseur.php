<?php
require_once "classeParent.php";
require_once "interfaces.php";

class Professeur extends Personne implements Presentation
{

    private $voiture;
    private $salaire;
    private $specialite;

    function __construct($nom, $prenom, $matricule, $voiture, $salaire, $specialite)
    {
        parent::__construct($nom, $prenom, $matricule);
        $this->voiture = $this->verifVoiture($voiture);
        $this->salaire = $this->verifSalaire($salaire);
        $this->specialite = $this->verifSpecialite($specialite);
    }

    // Getters
    function getVoiture()
    {
        echo $this->voiture;
    }

    function getSalaire()
    {
        return $this->salaire;
    }

    function getSpecialite()
    {
        return $this->specialite;
    }


    // Setters
    function setSalaire($salaire)
    {
        $this->salaire;
    }

    function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    }

    function setVoiture($voiture)
    {
        $this->voiture;
    }

    //..........................

    function presentation()
    {
        if ($this->voiture === "oui") {
            echo "Bonjour, je suis {$this->getNom()} {$this->getPrenom()} je suis un specialiste en {$this->getSpecialite()} et pour cela, j'ai un salaire de {$this->getSalaire()}, ce qui m'a permi d'acheter une voiture";
        } elseif ($this->voiture === "non") {
            echo "Bonjour, je suis {$this->getNom()} {$this->getPrenom()} je suis un specialiste en {$this->getSpecialite()} et pour cela, j'ai un salaire de {$this->getSalaire()}, ce qui ne me permet pas d'acheter une voiture";
        }
    }

    function evaluerEtudiant($date_evaluation)
    {
        echo "L'evaluation est prevu le $date_evaluation";
    }

    // Validations

    function verifVoiture($voiture)
    {
        if ($voiture != "oui" && $voiture != "non") {
            echo "BAAD,  soit c'est un oui ou c'est un nom";
            die();
        } else {
            return $voiture;
        }
    }

    function verifSalaire($salaire)
    {
        if (empty($salaire) || !is_string($salaire)) {
            echo "BAAD, le salaire doit etre un nombre qui ne contient pas de virgule";
            die();
        } else {
            return $salaire;
        }
    }

    function verifSpecialite($specialite)
    {
        if (empty($$specialite) || !is_string($salaire)) {
            echo "BAAD, le salaire doit etre une chaine de caractere";
            die();
        } else {
            return $salaire;
        }
    }
}
