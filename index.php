<?php

// require
require_once('src/Controllers/HomepageController.php');
require_once('src/Controllers/FigurineController.php');
require_once('src/Controllers/CardController.php');

// router
try
{
	if (isset($_GET['page']) && !empty($_GET['page']))
	{
        if ($_GET['page'] === 'figurine')
        {
			figurine();
        }

        else if ($_GET['page'] === 'card')
        {
			card();
        }

		else
		{
			throw new Exception("La page que vous recherchez n'existe pas.");
		}
	}

	else
	{
		homepage();
	}
}

catch (Exception $exception)
{
	// echo 'Error : ' . $exception->getMessage();

	header('Location: ./');
}
