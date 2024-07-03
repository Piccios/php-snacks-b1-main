<?php

class Membership {
    private $level;
    private $price;

    public function __construct($level, $price) {
        $this->setLevel($level);
        $this->setPrice($price);
    }

    // Getter per il livello
    public function getLevel() {
        return $this->level;
    }

    // Setter per il livello
    public function setLevel($level) {
        $this->level = $level;
    }

    // Getter per il prezzo
    public function getPrice() {
        return $this->price;
    }

    // Setter per il prezzo
    public function setPrice($price) {
        if ($price >= 0) {
            $this->price = $price;
        }
    }
}