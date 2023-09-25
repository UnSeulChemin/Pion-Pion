<?php

// require
require_once('src/Model/Show.php');

function showId($getId)
{
    // functions
	$result = getProductById($getId);

	// vue
	require('templates/pages/show.php');
}
