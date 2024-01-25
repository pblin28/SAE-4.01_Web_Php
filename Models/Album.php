<?php

class Album {
    private $id;
    private $title;
    private $artistId;
    private $releaseYear;
    private $genre;
    private $cover;
    private $genreId;

    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getArtistId() {
        return $this->artistId;
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

    public function setArtistId($artistId) {
        $this->artistId = $artistId;
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