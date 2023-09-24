<?php

// require
require_once('src/Model/Card.php');

function card()
{
	// functions
	$cards = getCard();
	$countPage = getCardCount();

	// vue
	require('templates/pages/card.php');
}

function cardPaginate(int $getId)
{
	// functions
	$cards = getCard($getId);
	$countPage = getCardCount($getId);

	// vue
	require('templates/pages/card.php');
}
