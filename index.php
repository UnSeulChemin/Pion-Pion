<?php

// require
require_once('src/Controllers/HomepageController.php');
require_once('src/Controllers/FigurineController.php');
require_once('src/Controllers/CardController.php');
require_once('src/Controllers/PlushController.php');

// router
try
{
	if (isset($_GET['page']) && !empty($_GET['page']))
	{
        if ($_GET['page'] === 'figurine')
        {
			if (isset($_GET['id']))
			{
				$getId = $_GET['id'];

				figurinePaginate($getId);
			}

			else
			{
				figurine();
			}
        }

        else if ($_GET['page'] === 'card')
        {
			if (isset($_GET['id']))
			{
				$getId = $_GET['id'];

				cardPaginate($getId);
			}

			else
			{
				card();
			}
        }

        else if ($_GET['page'] === 'plush')
        {
			plush();
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
