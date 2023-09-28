<?php
class Animal {
    protected $name;
    protected $legs;
    protected $cold_blooded;

    public function __construct($name) {
        $this->name = $name;
        $this->legs = 4;
        $this->cold_blooded = 'no';
    }

    public function getName() {
        return $this->name;
    }

    public function getLegs() {
        return $this->legs;
    }

    public function getColdBlooded() {
        return $this->cold_blooded;
    }
}
class Frog extends Animal {
    public function jump() {
        echo "hop hop<br>";
    }
}
class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name);
        $this->legs = 2;
    }

    public function yell() {
        echo "Auooo<br>";
    }
}