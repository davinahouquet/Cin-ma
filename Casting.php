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
?>