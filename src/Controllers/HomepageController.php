<?php

// require
require_once('src/Model/Homepage.php');

function homepage()
{
	// functions
	$news = getNew();
	$products = getPromo();

	// vue
	require('templates/pages/homepage.php');
}
