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
        $this->_DateNaissance = new DateTime($dateNaissance);
        $this->_Roles = [];
    }
}

?>