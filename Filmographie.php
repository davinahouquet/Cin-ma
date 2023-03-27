<?php

class Filmogrpahie{
    private array $_filmsActeur;
    private array $_filmsRealisateur;


//On utilise array pour lister les (films réalisés) par (Réalisateur)
//On va mettre en lien ces deux classes
    public function __construct(array $filmsRealisateur){
        $this->_filmsRealisateur = [];
        $this->_filmsActeur = [];
    }
    public function getFilmsRealises(){
        return $this->_filmsRealisateur;
    }
    public function setFilmsRealises(array $filmsRealisateur){
        $this->_filmsRealisateur = $filmsRealisateur;
    }
    public function getFilmsActeur(){
        return $this->_filmsActeur;
    }
    public function setfilmsActeur(array $_filmsActeur){
        $this->_filmsActeur = $_filmsActeur;
    }

    //Fonction qui liste la filmographie d'un réalisateur

    // public function afficherFilmsRealises(array $filmsRealises){
    //     foreach($filmsRealises as $this->_FilmsRealises){
    //         echo $this->_FilmsRealises. "<br>";
    //     }
    // }
}
?>