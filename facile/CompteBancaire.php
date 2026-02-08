<?php

    class CompteBancaire{
        public $id;
        public $solde;

        public function __construct($id,$solde){
            $this->id=$id;
            $this->solde=$solde;
        }

        public function deposer($montant){
                return $this->solde +=$montant;
        }

        public function retirer($montant){
            if($this->solde<$montant){
                echo "votre solde est insuffisant";
                return;
            }
            $this->solde -=$montant;
        }

    }

    $compt1 = new CompteBancaire(1,300);

    $compt1->deposer(400);

    print_r($compt1);

     
?>