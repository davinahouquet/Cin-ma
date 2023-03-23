<?php

class Film{
    private string $_Titre;
    private DateTime $_DateSortie;
    private Duree $_Duree;
    private Realisateur $_Realisateur;
    private string $_Synopsis;
    private array $_Casting;
    private string $_Genre;
}
    public function __construct(string $titre, DateTime $dateSortie, Duree $duree, Realisateur $realisateur, string $synopsis, array $casting, string $genre){
        $this->_Titre = $titre;
        $this->_DateSortie = $dateSortie;
        $this->_Duree = $duree;
        $this->_Realisateur = $realisateur;
        $this->_Synopsis = $synopsis;
        $this->_Casting = [];
        $this->_Genre = $genre;
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
    public function setDateSortie(DateTime $dateSortie){
        $this->_DateSortie = $dateSortie;
    }
    public function getDuree(){
        return $this->_Duree;
    }
    public function setDuree(Duree $duree){
        $this->_Duree = $duree;
    }
    public function getRealisateur(){
        return $this->_Realisateur;
    }
    public function setRealisateur(Realisateur $realisateur){
        $this->_Realisateur = $realisateur;
    }
    public function getSynopsis(){
        return $this->_Synopsis;
    }
    public function setSynopsis(string $synopsis){
        $this->_Synopsis = $synopsis;
    }
    public function getCasting(){
        return $this->_Casting;
    }
    public function setCasting(array $casting){
        $this->_Casting = $casting;
    }
    public function getGenre(){
        return $this->_Genre;
    }
    public function setGenre(array $genre){
        $this->_Genre = $genre;
    }
?>