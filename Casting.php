<?php

class Casting{
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
    public function getRole(){
        return $this->_Role->getRoleNom();
    }
    public function setCastingRole($castingRole){
        $this->_Role = $castingRole;

    }
    public function getCastingActeur(){
        return $this->_CastingActeur;
    }

    public function setCastingActeur($castingActeur){
        $this->_CastingActeur = $castingActeur;
    }

    /*Fonction qui permet de lister le casting d'un film
    (Dans tel film, ce rôle a été incarné par cet acteur, ce rôle a été incarné par cet acteur...)*/
}
?>