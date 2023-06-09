<?php

class Casting{
    private film $_Film;
    private role $_Role;
    private acteur $_Acteur;

    public function __construct(film $film, role $role, acteur $acteur){
        $this->_Film = $film;
        $this->_Role = $role;
        $this->_Acteur = $acteur;
        $this->_Film->addCasting($this);
        $this->_Acteur->addCasting($this);
        $this->_Role->addCasting($this);
    }
    public function getFilm(){
        return $this->_Film->getTitre();
    }
    public function setFilm($film){
        $this->_Film = $film;
    }
    public function getRole(){
        return $this->_Role;
    }
    public function setRole($role){
        $this->_Role = $role;

    }
    public function getActeur(){
        return $this->_Acteur->getPrenom(). " " .$this->_Acteur->getNom();
    }

    public function setActeur($acteur){
        $this->_Acteur = $acteur;
    }
}
