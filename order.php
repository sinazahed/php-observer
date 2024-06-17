<?php
class Order {
    private $observers = [];
    private $orderDetails;

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this->orderDetails);
        }
    }

    public function createOrder($orderDetails) {
        $this->orderDetails = $orderDetails;
        // Order creation logic here...
        $this->notify();
    }

    public function getOrderDetails() {
        return $this->orderDetails;
    }
}