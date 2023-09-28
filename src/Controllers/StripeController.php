<?php

// require
require_once('src/Model/Identifier.php');

function stripeId($getId)
{
    // functions
	$result = getIdentifier($getId);

	// vue
	require('templates/pages/payment/stripe.php');
}
