<?php

class Rating {
    private $id;
    private $userId;
    private $albumId;
    private $rating;

    public function __construct($userId, $albumId, $rating) {
        $this->userId = $userId;
        $this->albumId = $albumId;
        $this->rating = $rating;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getAlbumId() {
        return $this->albumId;
    }

    public function getRating() {
        return $this->rating;
    }

    // Setters
    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function setAlbumId($albumId) {
        $this->albumId = $albumId;
    }

    public function setRating($rating) {
        $this->rating = $rating;
    }
}

?>
