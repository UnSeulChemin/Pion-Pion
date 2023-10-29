<?php

require_once('src/Db/dbConnect.php');

function getWish(int $getId = 1): array
{
    $database = dbConnect();

    // number of wish per page
	$wishPerPage = 8;

	// limit
	$start = ($getId -1) * $wishPerPage;

    $statement = $database->query('SELECT * FROM wish ORDER BY created_at DESC LIMIT ' . $start . ', ' . $wishPerPage);

    // get array
    $wishs = [];
    while ($row = $statement->fetch())
    {
        $wish = [
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'description' => $row['description'],
            'new' => $row['new'],
            'promo' => $row['promo'],
            'uniqid' => $row['uniqid'],
            'created_at' => $row['created_at']
        ];

        $wishs[] = $wish;
    }

    return $wishs;
}

function getWishCount(int $getId = 1): int
{
    $database = dbConnect();

 	$fetchWish = $database->prepare('SELECT COUNT(*) AS count FROM wish');
	$fetchWish->execute();

	if ($fetchWish->rowCount() > 0)
	{
		$countCard = $fetchWish->fetch();
	}

	$wishPerPage = 8;
	$countPage = ceil($countCard['count'] / $wishPerPage);

    return $countPage;
}
