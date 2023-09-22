<?php

require_once('src/Model/Figurine.php');

function figurine()
{
	// functions
	$figurines = getFigurine();

	// vue
	require('templates/pages/figurine.php');
}
