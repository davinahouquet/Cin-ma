<?php

class Film{
    private string $_Titre;
    private DateTime $_DateSortie;
    private Duree $_Duree;
    private Realisateur $_Realisateur;
    private string $_Synopsis;
    private array $_Casting;
}
    public function __construct(string $titre, DateTime $dateSortie, Duree $duree, Realisateur $realisateur, string $synopsis, array $casting){
        $this->_Titre = $titre;
        $this->_DateSortie = $dateSortie;
        $this->_Duree = $duree;
        $this->_Realisateur = $realisateur;
        $this->_Synopsis = $synopsis;
        $this->_Casting = [];
    }

?>