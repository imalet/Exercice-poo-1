<?php

// On forcer a se presenter
interface Presentation
{
    function presentation();
}

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

class Etudiant extends Personne implements Presentation
{

    private $date_naissance;

    function __construct($nom, $prenom, $matricule, $date_naissance)
    {
        parent::__construct($nom, $prenom, $matricule);
        $this->date_naissance = $date_naissance;
    }

    function getDateNaissance()
    {
        return $this->date_naissance;
    }

    function setDateNaissance($nouvelleDate)
    {
        $this->date_naissance = $nouvelleDate;
    }

    function presentation()
    {
        echo "Bonjour, je suis {$this->getNom()} {$this->getPrenom()} je suis nee le {$this->getDateNaissance()}";
    }

    function faireCours()
    {
        echo "Bonjour, je suis apte pour faire un cours";
    }

    function faireEvaluation()
    {
        echo "Bonjour, je suis apte pour faire une evaluation";
    }
}

class Professeur extends Personne implements Presentation
{

    private $voiture;
    private $salaire;
    private $specialite;

    function __construct($nom, $prenom, $matricule, $voiture, $salaire, $specialite)
    {
        parent::__construct($nom, $prenom, $matricule);
        $this->voiture = $this->verifVoiture($voiture);
        $this->salaire = $salaire;
        $this->specialite = $specialite;
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
            echo "Bonjour, je suis $this->nom $this->prenom je suis un specialiste en $this->specialite et pour cela, j'ai un salaire de $this->salaire, ce qui m'a permi d'acheter une voiture";
        } elseif($this->voiture === "non") {
            echo "Bonjour, je suis $this->nom $this->prenom je suis un specialiste en $this->specialite et pour cela, j'ai un salaire de $this->salaire, ce qui ne me permet pas d'acheter une voiture";
        }
    }

    function evaluerEtudiant($date_evaluation)
    {
        echo "L'evaluation est prevu le ";
    }

    function verifVoiture($voiture)
    {
        if ($voiture != "oui" && $voiture != "non") {
            echo "BAAD,  soit c'est un oui ou c'est un nom";
        }else {
            return $voiture;
        }
    }
}

$etudiant = new Etudiant("IMALET", "Benji", "00241", "05/04/2000");
// --------
$professeur = new Professeur("IMALET", "Benji", "00240", "oui", 560000, "Developpement Backend");
$professeur->presentation();
