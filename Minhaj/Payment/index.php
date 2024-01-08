<?php require('./config.php'); ?>
<form action="charge.php" method="post">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $stripe['publishable_key']; ?>"
        data-image="puc.png"
        data-label ="Pay Now"
        data-name="full-stack-2024"
        data-description = "Access for one time"
        data-amount="500"
        data-email="mdhassan49.muh@gmail.com"
        data-locale="auto">
    </script>
</form>