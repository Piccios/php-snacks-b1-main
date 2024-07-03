<?php

require_once __DIR__ . "/src/classes/User.php";
require_once __DIR__ . "/src/classes/PremiumUser.php";
require_once __DIR__ . "/src/classes/Membership.php";


try {
    $membership = new Membership("Gold", 99.99);
    $premiumUser = new PremiumUser("Mario Rossi", "mario.rossi@example.com", $membership);

    echo "Nome: " . $premiumUser->getName() . "\n";
    echo "Email: " . $premiumUser->getEmail() . "\n";
    echo "Livello Membership: " . $premiumUser->getMembership()->getLevel() . "\n";
    echo "Prezzo Membership: " . $premiumUser->getMembership()->getPrice() . "\n";
} catch (Exception $err) {
    echo 'Errore: ' . $err->getMessage();
}