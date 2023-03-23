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
    public function getNom(){
        return $this->_Nom;
    }
    public function setNom(string $nom){
        $this->_Nom = $nom;
    }
    public function getPrenom(){
        return $this->_Prenom;
    }
    public function setPrenom(string $prenom){
        $this->_Prenom = $prenom;
    }
    public function getSexe(){
        return $this->_Sexe;
    }
    public function setSexe(string $sexe){
        $this->_Sexe = $sexe;
    }
    public function getDateNaissance(){
        return $this->_DateNaissance;
    }
    public function setDateNaissance(DateTime $dateNaisance){
        $this->_DateNaissance = $dateNaissance;
    }
    public function getFilmographieRealisateur(){
        return $this->_FilmographieRealisateur;
    }
    public function setFilmographieRealisateur(string $filmographieRealisateur){
        $this->_FilmographieRealisateur = $filmographieRealisateur;
    }
?>