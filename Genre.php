<?php

class Genre{
    private string $_GenreFilm;
    private string $_GenreNom;
<<<<<<< HEAD

    public function __construct(string $genreFilm, string $genreNom){
=======
}
    public function __construct(string $genrefilm, string $genrenom){
>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
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
<<<<<<< HEAD
}
=======

>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
    //Fonction qui permet de lister les films par genre
?>