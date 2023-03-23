<?php

class Film{
    private string $_Titre;
    private string $_DateSortie;
    private string $_Duree;
    private Realisateur $_Realisateur;
    private string $_Synopsis;

    public function __construct(string $titre, string $dateSortie, string $duree, Realisateur $realisateur, string $synopsis){
        $this->_Titre = $titre;
        $this->_DateSortie = $dateSortie;
        $this->_Duree = $duree;
        $this->_Realisateur = new Realisateur ($realisateur);
        $this->_Synopsis = $synopsis;
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
}
?>