<?php
class Cercle extends Forme {

    protected $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function calculerAire() {
        return pi() * $this->rayon * $this->rayon;
    }
}
?>
