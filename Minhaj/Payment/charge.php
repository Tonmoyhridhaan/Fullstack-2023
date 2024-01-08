<?php

    require('./config.php'); 
    echo '<pre>';
    print_r($_POST);

    $token = $_POST['stripeToken'];
    $Token_Type = $_POST['stripeTokenType'];
    $Email = $_POST['stripeEmail'];

    $charge = \Stripe\Charge :: create([
            'source' => $token, 
            'amount' => 5000, 
            'currency' => 'USD'
        ]
    );
    echo ' Succesfully Charged';
    echo'<pre>';
    print_r($charge);
    $amount = $charge['amount'];
    $id  = $charge['id'];

?>
