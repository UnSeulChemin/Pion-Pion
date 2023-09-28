<?php

require_once('src/Db/dbConnect.php');

function getFigurine(int $getId = 1): array
{
    $database = dbConnect();

    // number of figurine per page
	$figurinePerPage = 8;

	// limit
	$start = ($getId -1) * $figurinePerPage;

    $statement = $database->query('SELECT * FROM figurine ORDER BY created_at DESC LIMIT ' . $start . ', ' . $figurinePerPage);

    // get array
    $figurines = [];
    while ($row = $statement->fetch())
    {
        $figurine = [
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'description' => $row['description'],
            'new' => $row['new'],
            'promo' => $row['promo'],
            'uniqid' => $row['uniqid'],
            'created_at' => $row['created_at']
        ];

        $figurines[] = $figurine;
    }

    return $figurines;
}

function getCount(int $getId = 1): int
{
    $database = dbConnect();

 	$fetchFigurine = $database->prepare('SELECT COUNT(*) AS count FROM figurine');
	$fetchFigurine->execute();

	if ($fetchFigurine->rowCount() > 0)
	{
		$countFigurine = $fetchFigurine->fetch();
	}

	$figurinePerPage = 8;
	$countPage = ceil($countFigurine['count'] / $figurinePerPage);

    return $countPage;
}
