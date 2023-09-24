<?php

// require
require_once('src/Model/Homepage.php');

function homepage()
{
	$news = getNew();
	$products = getProduct();

	// vue
	require('templates/pages/homepage.php');
}
