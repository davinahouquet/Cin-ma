<?php

class Genre{
    private string $_GenreFilm;
    private string $_GenreNom;
}
    public function __construct(string $genrefilm, string $genrenom){
        $this->_GenreFilm = $genreFilm;
        $this->_GenreNom = $genreNom;
    }

?>