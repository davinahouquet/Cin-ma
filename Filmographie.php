<?php

class Filmogrpahie{
    private array $_FilmsRealises;
<<<<<<< HEAD

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
=======
}
//On utilise array pour lister les (films réalisés) par (Réalisateur)
//On va mettre en lien ces deux classes
    public function __construct($array $filmsrealises){
        $this->_FilmsRealises = [];
    }

    //Fonction qui liste la filmographie d'un réalisateur
>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
?>