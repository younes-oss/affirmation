<?php
class Produit{
    private $id;
    private $nom;
    private $prix;

    public function  __construct($id,$nom,$prix){

        $this->id=$id;
        $this->nom=$nom;
        $this->prix=$prix;

    }

    public function getPrix(){
        return $this->prix ."DH";
    }

    
}
$produit1 = new Produit(1,"Telephone",200);

print_r($produit1->getPrix());

?>