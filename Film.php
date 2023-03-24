<?php

class Film
{
    private string $_Titre;
    private string $_DateSortie;
    private int $_Duree;
    private $_Realisateur;
    private string $_Synopsis;
    private array $_Casting;

    public function __construct(string $titre, string $dateSortie, int $duree, $realisateur, string $synopsis)
    {
        $this->_Titre = $titre;
        $this->_DateSortie = $dateSortie;
        $this->_Duree = $duree;
        $this->_Realisateur = $realisateur;
        $this->_Synopsis = $synopsis;
        $this->_Casting = [];
    }

    public function getTitre()
    {
        return $this->_Titre;
    }
    public function setTitre(string $titre)
    {
        $this->_Titre = $titre;
    }
    public function getDateSortie()
    {
        return $this->_DateSortie;
    }

    public function getDuree()
    {
        return $this->_Duree;
    }


    public function setDuree(int $duree)
    {
        $this->_Duree = $duree;
    }
    public function getRealisateur()
    {
        return $this->_Realisateur;
    }

    public function setRealisateur(Realisateur $realisateur)
    {

        $this->_Realisateur = $realisateur;
    }
    public function getSynopsis()
    {
        return $this->_Synopsis;
    }
    public function setSynopsis(string $synopsis)
    {
        $this->_Synopsis = $synopsis;
    }
    //Méthodes pour ajouterTableau
    public function addCasting(Casting $casting)
    {
        $this->_Casting[] = $casting;
    }

    public function afficherCasting()
    {
        $result = "Dans le film " . $this->getTitre();
        foreach ($this->_Casting as $casting) {
            $result .=  ", le rôle de " . $casting->getRole()->getRoleNom() . " a été incarné par " . $casting->getActeur() . " ";
        }
        return $result;
    }
}
