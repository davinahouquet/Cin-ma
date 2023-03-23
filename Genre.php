<?php

class Genre{
    private string $_GenreFilm;
    private string $_GenreNom;
}
    public function __construct(string $genrefilm, string $genrenom){
        $this->_GenreFilm = $genreFilm;
        $this->_GenreNom = $genreNom;
    }
    public function getGenreFilm(){
        return $this->_GenreFilm;
    }
    public function setGenreFilm(string $genreFilm){
        $this->_GenreFilm = $genreFilm;
    }
    public function getGenreNom(){
        return $this->_GenreNom;
    }
    public function setGenreNom($genreNom){
        $this->_GenreNom = $genreNom;
    }

    //Fonction qui permet de lister les films par genre
?>