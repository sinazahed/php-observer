<?php
class BillingObserver implements Observer {
    public function update($order) {
        echo "Generating invoice for order: " . json_encode($order) . "\n";
    }
}