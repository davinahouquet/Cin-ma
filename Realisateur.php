<?php

class Realisateur{
    private string $_Nom,
    private string $_Prenom;
    private string $_Sexe;
    private DateTime $_DateTime;
    private array $_FilmographieRealisateur;
}

    public function __construct(string $_Nom, string $_Prenom, string $_Sexe, DateTime $_DateTime, array $_FilmographieRealisateur){
        $this->_Nom = $nom;
        $this->_Prenom = $prenom;
        $this->_Sexe = $sexe;
        $this->_DateNaissance = new DateTime($dateNaissance);
        $this->_FilmographieRealisateur = [];
    }
?>