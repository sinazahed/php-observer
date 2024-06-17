<?php
class InventoryObserver implements Observer {
    public function update($order) {
        echo "Updating inventory for order: " . json_encode($order) . "\n";
    }
}