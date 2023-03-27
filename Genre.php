<?php

 class Genre{
    private string $_genre;
    private array $_filmsGenre = [];

    public function __construct(string $genre){
     $this->_genre = $genre;
    }

    //Getter et setter
    public function getGenre() : string{
     return $this->_genre;
    }
    public function setGenre(string $genre){
       $this->_genre = $genre;
    }

    // Getter et Setter des films dans ce genre
    public function getFilmsGenre() : array{
        return $this->_filmsGenre;
    }
    public function setFilmsGenre(Film $filmsGenre){
        $this->_filmsGenre = $filmsGenre;
    }

    //Méthode pour lister les films du même genre
    public function listerFilmsGenre(){
        $result = "Le genre " .$this->getGenre(). " est associé à " . count($this->_filmsGenre) . " films :<br>";
        foreach($this->_filmsGenre as $film){
        $result .= "- $film<br>";
    }
        return $result;
    }

    // Méthode __toString de la classe
    public function __toString(){
        return $this->_genre;
    }
    public function addGenre(Film $film){
        $this->_FilmsGenre[] = $film;
    }
}
?>