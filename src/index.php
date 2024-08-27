<?php
require __DIR__ . '/../vendor/autoload.php';
use Stripe\StripeClient;


$stripe = new StripeClient('sk_test_BQokikJOvBiI2HlWgH4olfQ2');
$customer = $stripe->customers->create([
    'description' => 'example customer',
    'email' => 'email@example.com',
    'payment_method' => 'pm_card_visa',
]);
echo $customer;