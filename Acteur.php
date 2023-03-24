<?php

class Acteur{
    private string $_Nom;
    private string $_Prenom;
<<<<<<< HEAD
    private string $_Sexe;
=======
    private string $_sexe;
>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
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
<<<<<<< HEAD
    public function setDateNaissance(string $dateNaissance){
=======
    public function setDateNaissance(string $dateNaisance){
>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
        $this->_DateNaissance = $dateNaissance;
    }

    //Fonction qui liste la filmographie d'un acteur
<<<<<<< HEAD


}
=======
}

>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
?>