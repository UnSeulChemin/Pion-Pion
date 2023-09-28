<?php

// require
require_once('src/Model/Identifier.php');

function identifierId($getId)
{
    // functions
	$result = getIdentifier($getId);

	// vue
	require('templates/pages/identifier/identifier.php');
}
