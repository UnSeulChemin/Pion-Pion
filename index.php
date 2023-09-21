<?php

// require
require_once('src/Controllers/HomepageController.php');
require_once('src/Controllers/FillerController.php');

// router
try
{
	if (isset($_GET['page']) && !empty($_GET['page']))
	{
        if ($_GET['page'] === 'filler')
        {
			filler();
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
