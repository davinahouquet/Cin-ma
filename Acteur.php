<?php

class Acteur{
    private string $_Nom;
    private string $_Prenom;
    private string $_sexe;
    private DateTime $_DateNaissance;
    private string $_Roles;


    public function __construct(string $nom, string $prenom, DateTime $dateNaissance, string $roles){
        $this->_Nom = $nom;
        $this->_Prenom = $prenom;
        $this->_Sexe = $sexe;
        $this->_DateNaissance = new DateTime($dateNaissance);
        $this->_Roles = [];
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
    public function getRoles(){
        return $this->_Roles;
    }
    public function setRoles(string $roles){
        $this->_Roles = $roles;
    }
}

?>