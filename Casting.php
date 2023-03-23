<?php

class Casting{
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
    }
    public function getCastingActeur(){
        return $this->_CastingActeur;
    }
    public function setCastingActeur(string $castingActeur){
        $this->_CastingActeur = $castingActeur;
    }
?>