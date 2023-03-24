<?php

class Acteur{
    private string $_Nom;
    private string $_Prenom;
    private string $_Sexe;
    private string $_DateNaissance;


    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){
        $this->_Nom = $nom;
        $this->_Prenom = $prenom;
        $this->_Sexe = $sexe;
        $this->_DateNaissance =$dateNaissance;
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
    public function setDateNaissance(string $dateNaissance){
        $this->_DateNaissance = $dateNaissance;
    }

    //Fonction qui liste la filmographie d'un acteur


}
?>