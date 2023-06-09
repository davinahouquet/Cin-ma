<?php

class Film
{
    private string $_Titre;
    private string $_DateSortie;
    private int $_Duree;
    private Realisateur $_Realisateur;
    private string $_Synopsis;
    private Genre $_genre;
    private array $_Casting;
    private array $_filmsRealises;
    private array $_filmsJoues;

    public function __construct(string $titre, string $dateSortie, int $duree, $realisateur, string $synopsis, Genre $genre)
    {
        $this->_Titre = $titre;
        $this->_DateSortie = $dateSortie;
        $this->_Duree = $duree;
        $this->_Realisateur = $realisateur;
        $this->_Realisateur->addFilmsRealises($this);
        $this->_filmsRealises = [];
        $this->_Synopsis = $synopsis;
        $this->_genre = $genre;
        $this->_genre->addGenre($this);
        $this->_Casting = [];
        $this->_filmsJoues = [];
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
    public function setDateSortie(string $dateSortie){
        $this->_DateSortie = $dateSortie;
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

    public function getGenre(): Genre
    {
        return $this->_genre;
    }

    public function setGenre(Genre $genre)
    {
        $this->_genre = $genre;
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
        return $result. ".<br><br>";
    }

    //Méthode _toString()
    public function __toString(){
        return $this->getTitre();
    }

}
?>
