<?php

// require
require_once('src/Controllers/HomepageController.php');
require_once('src/Controllers/FigurineController.php');
require_once('src/Controllers/CardController.php');
require_once('src/Controllers/PlushController.php');
require_once('src/Controllers/WishController.php');
require_once('src/Controllers/NewController.php');
require_once('src/Controllers/PromoController.php');
require_once('src/Controllers/IdentifierController.php');
require_once('src/Controllers/StripeController.php');

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
			if (isset($_GET['id']))
			{
				$getId = $_GET['id'];

				plushPaginate($getId);
			}

			else
			{
				plush();
			}
        }

        else if ($_GET['page'] === 'wish')
        {
			if (isset($_GET['id']))
			{
				$getId = $_GET['id'];

				wishPaginate($getId);
			}

			else
			{
				wish();
			}
        }

		else if ($_GET['page'] === 'new')
		{
			news();
		}

		else if ($_GET['page'] === 'promo')
		{
			promos();
		}

		else if ($_GET['page'] === 'identifiant')
		{
			if (isset($_GET['id']))
			{
				$getId = $_GET['id'];

				identifierId($getId);
			}

			else
			{
				homepage();
			}
		}

		else if ($_GET['page'] === 'stripe')
		{
			if (isset($_GET['id']))
			{
				$getId = $_GET['id'];

				stripeId($getId);
			}

			else
			{
				homepage();
			}
		}

		else if ($_GET['page'] === 'register')
		{
			card();
		}

		else if ($_GET['page'] === 'login')
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
