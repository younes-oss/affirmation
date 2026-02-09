<?php
class Paypal implements PaiementInterface {

    public function payer($montant) {
        echo "Paiement de $montant DH effectue via Paypal";
    }
}
?>
