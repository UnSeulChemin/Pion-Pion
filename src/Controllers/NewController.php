<?php

// require
require_once('src/Model/New.php');

function news()
{
	// functions
	$news = getNews();

	// vue
	require('templates/pages/homepage/new.php');
}
