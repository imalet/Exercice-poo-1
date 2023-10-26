<?php

class Evaluation
{
    public $nom;
    public $infoProfesseur;
    public $dateEvaluation;
    public $duree;

    function __construct($nom, $infoProfesseur, $dateEvaluation, $duree)
    {
        $this->nom = $this->verifInfo($nom);
        $this->infoProfesseur = $this->verifInfo($infoProfesseur);
        $this->dateEvaluation = $this->verifDuree($dateEvaluation);
        $this->duree = $duree;
    }

    // Guetters
    function getNom()
    {
        return $this->nom;
    }

    function getInfoProfesseur()
    {
        return $this->infoProfesseur;
    }

    function getDateEvaluation()
    {
        return $this->dateEvaluation;
    }

    function getDuree()
    {
        return $this->duree;
    }

    // Setters
    function setNom(){
        return $this->nom;
    }

    function setInfoProfesseur(){
        return $this->infoProfesseur;
    }

    function setDateEvaluation(){
        return $this->dateEvaluation;
    }

    function setDuree(){
        return $this->duree;
    }

    // Fonction
    function infoEvaluation()
    {
        echo "l'valuation a pour titre {$this->getNom()} qui sera fait par le professeur {$this->getInfoProfesseur()} qui aura lieu le {$this->getDateEvaluation()} pour une duree de {$this->getDuree()} heures";
    }

    // Validations
    public function verifInfo($info)
    {
        if (!is_string($info)) {
            echo "Désolé mon frere mais le $info doit etre une chaine de caractere OYOKI ?";
            die();
        } else {
            return $info;
        }
    }

    public function verifDuree($laDuree)
    {
        
        if (!DateTime::createFromFormat('d-m-Y,', $laDuree)) {
            echo "BAD";
            die();
        }
        
    }
}

$evaluation = new Evaluation("TP PHP","LE COACH MOUNTAGA BAH" , "2023-10-26 15:30:00",5);
$evaluation->infoEvaluation();