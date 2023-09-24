<?php

// require
require_once('src/Model/Plush.php');

function plush()
{
	// functions
	$plushs = getPlush();
	$countPage = getPlushCount();

	// vue
	require('templates/pages/plush.php');
}

function plushPaginate(int $getId)
{
	// functions
	$plushs = getPlush($getId);
	$countPage = getPlushCount($getId);

	// vue
	require('templates/pages/plush.php');
}
