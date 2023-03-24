<?php

class Filmogrpahie{
    private array $_FilmsRealises;


//On utilise array pour lister les (films réalisés) par (Réalisateur)
//On va mettre en lien ces deux classes
    public function __construct(array $filmsRealises){
        $this->_FilmsRealises = [];
    }
    public function getFilmsRealises(){
        return $this->_FilmsRealises;
    }
    public function setFilmsRealises(array $filmsRealises){
        $this->_FilmsRealises = $filmsRealises;
    }

    //Fonction qui liste la filmographie d'un réalisateur

    // public function afficherFilmsRealises(array $filmsRealises){
    //     foreach($filmsRealises as $this->_FilmsRealises){
    //         echo $this->_FilmsRealises. "<br>";
    //     }
    // }
}
?>