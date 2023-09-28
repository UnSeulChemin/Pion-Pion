<?php

// require
require_once('src/Model/Promo.php');

function promos()
{
    // functions
	$promos = getPromos();

	// vue
	require('templates/pages/homepage/promo.php');
}
