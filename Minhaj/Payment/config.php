<?php
    require_once('./stripe-php/init.php');
    $stripe = [
        "secret_key" => "sk_test_51OVHwXJQbM0mMIkPNdpBEu9uEIVrZ6Pr9whhPgbieBygeDvNSkU18gQ0gpSOpnRRDzpQQQHNl4yyWh5c4JYPnT2C00GdwbBcH9",
        "publishable_key" => "pk_test_51OVHwXJQbM0mMIkPglJqbkC12rZXrK2mOg9vsfi1ax6XZQdCkexKzRn280yQAEIiA8woK883dZ7FUU150HHkyG5p00PhdkO3nK",
    ];
    \Stripe\Stripe::setApiKey($stripe['secret_key']);
?>