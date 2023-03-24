<?php

class Casting{
<<<<<<< HEAD
    private film $_CastingFilm;
    private role $_Role;
    private acteur $_CastingActeur;

    public function __construct(film $castingFilm, role $role, acteur $castingActeur){
        $this->_CastingFilm = $castingFilm;
        $this->_Role = $role;
        $this->_CastingActeur = $castingActeur;
        
    }
    public function getCastingFilm(){
        return $this->_CastingFilm->getTitre(). " " .$this->_CastingFilm->getDateSortie();
    }
    public function setCastingFilm($castingFilm){
        $this->_CastingFilm = $castingFilm;
    }
    public function getCastingRole(){
        return $this->_Role->getRoleNom();
    }
    public function setCastingRole($castingRole){
        $this->_Role = $castingRole;
=======
    private string $_CastingFilm;
    private string $_CastingRole;
    private string $_CastingActeur;
}
    public function __construct(string $castingFilm, string $castingRole, string $castingActeur){
        $this->_CastingFilm = $castingFilm;
        $this->_CastingRole = $castingRole;
        $this->_CastingActeur = $castingActeur;
    }
    public function getCastingFilm(){
        return $this->_CastingFilm;
    }
    public function setCastingFilm(string $castingFilm){
        $this->_CastingFilm = $castingFilm;
    }
    public function getCastingRole(){
        return $this->_CastingRole;
    }
    public function setCastingRole(string $castingrole){
        $this->_CastingRole = $castingRole;
>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
    }
    public function getCastingActeur(){
        return $this->_CastingActeur;
    }
<<<<<<< HEAD
    public function setCastingActeur($castingActeur){
        $this->_CastingActeur = $castingActeur;
    }
}
    /*Fonction qui permet de lister le casting d'un film
    (Dans tel film, ce rôle a été incarné par cet acteur, ce rôle a été incarné par cet acteur...)*/

=======
    public function setCastingActeur(string $castingActeur){
        $this->_CastingActeur = $castingActeur;
    }

    /*Fonction qui permet de lister le casting d'un film
    (Dans tel film, ce rôle a été incarné par cet acteur, ce rôle a été incarné par cet acteur...)*/
>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
?>