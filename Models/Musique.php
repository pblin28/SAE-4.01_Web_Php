<?php

class Musique {
    private $id;
    private $title;
    private $artist; 
    private $interpreter; 
    private $composer; 
    private $releaseYear;
    private $genre;
    private $cover;
    private $genreId;

    public function __construct($title, Artist $artist, Artist $interpreter, Artist $composer, $releaseYear, $genre, $cover, $genreId) {
        $this->title = $title;
        $this->artist = $artist;
        $this->interpreter = $interpreter;
        $this->composer = $composer;
        $this->releaseYear = $releaseYear;
        $this->genre = $genre;
        $this->cover = $cover;
        $this->genreId = $genreId;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function getInterpreter() {
        return $this->interpreter;
    }

    public function getComposer() {
        return $this->composer;
    }

    public function getReleaseYear() {
        return $this->releaseYear;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getCover() {
        return $this->cover;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setArtist(Artist $artist) {
        $this->artist = $artist;
    }

    public function setInterpreter(Artist $interpreter) {
        $this->interpreter = $interpreter;
    }

    public function setComposer(Artist $composer) {
        $this->composer = $composer;
    }

    public function setReleaseYear($releaseYear) {
        $this->releaseYear = $releaseYear;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function setCover($cover) {
        $this->cover = $cover;
    }

    public function getGenreId() {
        return $this->genreId;
    }

    public function setGenreId($genreId) {
        $this->genreId = $genreId;
    }
}

?>