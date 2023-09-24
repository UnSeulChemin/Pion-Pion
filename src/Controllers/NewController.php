<?php

// require
require_once('src/Model/New.php');

function news()
{
	$news = getNews();

	// vue
	require('templates/pages/new.php');
}
