<?php

class Film{
    private string $_Titre;
    private string $_DateSortie;
    private string $_Duree;
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
    public function setDateSortie(string $dateSortie){
        $this->_DateSortie = $dateSortie;
    }
    public function getDuree(){
        return $this->_Duree;
    }
    public function setDuree(string $duree){
        $this->_Duree = $duree;
    }
    public function getRealisateur(){
        return $this->_Realisateur;
    }
    public function setRealisateur($realisateur){
        $this->_Realisateur = $realisateur;
    }
    public function getSynopsis(){
        return $this->_Synopsis;
    }
    public function setSynopsis(string $synopsis){
        $this->_Synopsis = $synopsis;
    }

    //Méthodes pour ajouterTableau
    public function test() {}
}
