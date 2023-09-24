<?php

require_once('src/Db/dbConnect.php');

function getCard(int $getId = 1): array
{
    $database = dbConnect();

    // number of figurine per page
	$cardPerPage = 8;

	// limit
	$start = ($getId -1) * $cardPerPage;

    $statement = $database->query('SELECT * FROM card ORDER BY created_at DESC LIMIT ' . $start . ', ' . $cardPerPage);

    // get array
    $cards = [];
    while ($row = $statement->fetch())
    {
        $card = [
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'description' => $row['description'],
            'new' => $row['new'],
            'promo' => $row['promo'],
            'created_at' => $row['created_at']
        ];

        $cards[] = $card;
    }

    return $cards;
}

function getCardCount(int $getId = 1)
{
    $database = dbConnect();

 	$compterMot = $database->prepare('SELECT COUNT(*) AS count FROM card');
	$compterMot->execute();

	if ($compterMot->rowCount() > 0)
	{
		$nombreDeMot = $compterMot->fetch();
	}

	$motParPage = 8;
	$countPage = ceil($nombreDeMot['count'] / $motParPage);

    return $countPage;
}
