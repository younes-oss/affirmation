<?php
class Rectangle extends Forme {

    protected $largeur;
    protected $hauteur;

    public function __construct($largeur, $hauteur) {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    public function calculerAire() {
        return $this->largeur * $this->hauteur;
    }
}
?>
