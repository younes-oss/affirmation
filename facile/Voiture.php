<?php
class Voiture{

    public $id;
    public $marque;
    public $couleur;
    public $vitesse;
    
    public function __construct($id,$marque,$couleur,$vitesse){
        $this->id=$id;
        $this->marque=$marque;
        $this->couleur=$couleur;
        $this->vitesse=$vitesse;
    }

    public function accelerer(){
        return $this->vitesse += 10;
    }

    public function afficherInfos(){
        return "marque : ".$this->marque ." couleur : ".$this->couleur." vitesse : ".$this->vitesse;
    }

     
}
$voiture1 = new Voiture(1,"toyota","rouge",20);

$voiture1->accelerer();
$test = $voiture1->afficherInfos();

print_r($test);
?>