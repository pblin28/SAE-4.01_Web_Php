<?php

class Artiste {
    private $id;
    private $name;
    private $bio;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getBio() {
        return $this->bio;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setBio($bio) {
        $this->bio = $bio;
    }
}

?>