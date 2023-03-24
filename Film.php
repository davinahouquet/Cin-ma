<?php

class Film{
    private string $_Titre;
    private string $_DateSortie;
    private string $_Duree;
<<<<<<< HEAD
    private $_Realisateur;
    private string $_Synopsis;
    private array $_Casting;

    public function __construct(string $titre, string $dateSortie, string $duree, $realisateur, string $synopsis){
        $this->_Titre = $titre;
        $this->_DateSortie = $dateSortie;
        $this->_Duree = $duree;
        $this->_Realisateur = $realisateur;
        $this->_Synopsis = $synopsis;
        $this->_Casting = [];
=======
    private Realisateur $_Realisateur;
    private string $_Synopsis;

    public function __construct(string $titre, string $dateSortie, string $duree, Realisateur $realisateur, string $synopsis){
        $this->_Titre = $titre;
        $this->_DateSortie = $dateSortie;
        $this->_Duree = $duree;
        $this->_Realisateur = new Realisateur ($realisateur);
        $this->_Synopsis = $synopsis;
>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
    }

    public function getTitre(){
        return $this->_Titre;
    }
    public function setTitre(string $titre){
        $this->_Titre = $titre;
    }
    public function getDateSortie(){
        return $this->_DateSortie;
    }
<<<<<<< HEAD
    public function setDateSortie(string $dateSortie){
=======
    public function setDateSortie(DateTime $dateSortie){
>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
        $this->_DateSortie = $dateSortie;
    }
    public function getDuree(){
        return $this->_Duree;
    }
<<<<<<< HEAD
    public function setDuree(string $duree){
=======
    public function setDuree(Duree $duree){
>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
        $this->_Duree = $duree;
    }
    public function getRealisateur(){
        return $this->_Realisateur;
    }
<<<<<<< HEAD
    public function setRealisateur($realisateur){
=======
    public function setRealisateur(Realisateur $realisateur){
>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
        $this->_Realisateur = $realisateur;
    }
    public function getSynopsis(){
        return $this->_Synopsis;
    }
    public function setSynopsis(string $synopsis){
        $this->_Synopsis = $synopsis;
    }
<<<<<<< HEAD

    //Méthodes pour ajouterTableau
    public function test() {}
}
=======
}
?>
>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
