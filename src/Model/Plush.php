<?php

require_once('src/Db/dbConnect.php');

function getPlush(int $getId = 1): array
{
    $database = dbConnect();

    // number of plush per page
	$plushPerPage = 8;

	// limit
	$start = ($getId -1) * $plushPerPage;

    $statement = $database->query('SELECT * FROM plush ORDER BY created_at DESC LIMIT ' . $start . ', ' . $plushPerPage);

    // get array
    $plushs = [];
    while ($row = $statement->fetch())
    {
        $plush = [
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'description' => $row['description'],
            'new' => $row['new'],
            'promo' => $row['promo'],
            'uniqid' => $row['uniqid'],
            'created_at' => $row['created_at']
        ];

        $plushs[] = $plush;
    }

    return $plushs;
}

function getPlushCount(int $getId = 1): int
{
    $database = dbConnect();

 	$fetchPlush = $database->prepare('SELECT COUNT(*) AS count FROM plush');
	$fetchPlush->execute();

	if ($fetchPlush->rowCount() > 0)
	{
		$countPlush = $fetchPlush->fetch();
	}

	$plushPerPage = 8;
	$countPage = ceil($countPlush['count'] / $plushPerPage);

    return $countPage;
}
