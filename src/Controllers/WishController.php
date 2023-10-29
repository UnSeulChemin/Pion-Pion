<?php

// require
require_once('src/Model/Wish.php');

function wish()
{
	// functions
	$wishs = getWish();
	$countPage = getWishCount();

	// vue
	require('templates/pages/wish.php');
}

function wishPaginate(int $getId)
{
	// functions
	$wishs = getWish($getId);
	$countPage = getWishCount($getId);

	// vue
	require('templates/pages/wish.php');
}
