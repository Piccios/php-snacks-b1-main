<?php

require_once __DIR__ . "/src/classes/User.php";
require_once __DIR__ . "/src/classes/PremiumUser.php";
require_once __DIR__ . "/src/classes/Membership.php";


try {
    $membership = new Membership("Gold", 99.99);
    $premiumUser = new PremiumUser("Mario Rossi", "mario.rossi@example.com", $membership);

    echo "Nome: " . $premiumUser->getName() . "<br>";
    echo "Email: " . $premiumUser->getEmail() . "<br>";
    echo "Livello Membership: " . $premiumUser->getMembership()->getLevel() . "<br>";
    echo "Prezzo Membership: " . $premiumUser->getMembership()->getPrice() . "<br>";
} catch (Exception $err) {
    echo 'Errore: ' . $err->getMessage();
}