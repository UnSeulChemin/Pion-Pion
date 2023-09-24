<?php

// require
require_once('src/Model/Figurine.php');

function figurine()
{
	// functions
	$figurines = getFigurine();
	$countPage = getCount();

	// vue
	require('templates/pages/figurine.php');
}

function figurinePaginate(int $getId)
{
	// functions
	$figurines = getFigurine($getId);
	$countPage = getCount($getId);

	// vue
	require('templates/pages/figurine.php');
}
