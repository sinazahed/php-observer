<?php
$order = new Order();

$inventoryObserver = new InventoryObserver();
$billingObserver = new BillingObserver();
$shippingObserver = new ShippingObserver();

$order->attach($inventoryObserver);
$order->attach($billingObserver);
$order->attach($shippingObserver);

$orderDetails = [
    'order_id' => 1234,
    'product' => 'Laptop',
    'quantity' => 1,
    'price' => 1500
];

$order->createOrder($orderDetails);