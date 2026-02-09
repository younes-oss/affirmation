<?php
class Virement implements PaiementInterface {

    public function payer($montant) {
        echo "Paiement de $montant DH effectue par virement bancaire";
    }
}
?>
