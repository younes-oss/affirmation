<?php
class Stripe implements PaiementInterface {

    public function payer($montant) {
        echo "Paiement de $montant DH effectue via Stripe";
    }
}
?>
