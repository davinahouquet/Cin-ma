<?php

class Genre{
    private string $_genre;
    private array $_films = [];

    public function __construct(string $genre){
        $this->_genre = $genre;
        // $this->_films = [];
    }
    public function getGenre(){
        return $this->_genre;
    }
    public function setGenre(string $genre){
        array_push($this->_genre = $genre);
    }
    // public function addFilms(Film $film)
    // {
    //     $this->_films[] = $film;
    // }
    // public function FilmsGenre()
    // {
    //     $result .= "<p> Le genre " . $this->_genre . " est associé à :</p>";
    //     foreach($this->_film as $films)
    //     {
    //         $result .= $films->getTitre() . "<br>";
    //     }
    //     return $result;
    // }
    public function listerFilmsGenre(){
        $result = "Le genre $this est associé à " . count($this->_films) . " films :<br>";
        foreach($this->_films as $film){
            $result .= "- $film<br>";
        }
        return $result;
    }

    /* Méthode __toString de la classe */
    public function __toString(){
        return $this->_genre;
    }
}
?>