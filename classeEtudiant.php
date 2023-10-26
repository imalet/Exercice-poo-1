<?php
require_once "classeParent.php";
require_once "interfaces.php";

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