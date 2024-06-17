<?php
class ShippingObserver implements Observer {
    public function update($order) {
        echo "Preparing shipping for order: " . json_encode($order) . "\n";
    }
}