<?php

class Filmogrpahie{
    private array $_FilmsRealises;
}
//On utilise array pour lister les (films réalisés) par (Réalisateur)
//On va mettre en lien ces deux classes
    public function __construct($array $filmsrealises){
        $this->_FilmsRealises = [];
    }
?>