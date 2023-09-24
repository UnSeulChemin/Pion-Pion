<?php

require_once('src/Db/dbConnect.php');

function getNew(): array
{
    $database = dbConnect();

    $news = [];

    $figurines = getAllFigurine();
    $cards = getAllCard();
    $plushs = getAllPlush();

    $news[] = array_merge($figurines, $cards, $plushs);

    foreach ($news as $key => $value)
    {
        $news = $value;
    }

    return $news;
}

// getFigurine
function getAllFigurine(): array
{
    $database = dbConnect();

    $statement = $database->query("SELECT * FROM figurine WHERE new = 'Y' ORDER BY created_at DESC LIMIT 4");

    $figurines = [];
    while ($row = $statement->fetch())
    {
        $figurine = [
            'id' => $row['id'],
            'name' => $row['name'],
            'category' => $row['category'],
            'price' => $row['price'],
            'description' => $row['description'],
            'new' => $row['new'],
            'created_at' => $row['created_at']
        ];

        $figurines[] = $figurine;
    }

	return $figurines;
}

// getCard
function getAllCard(): array
{
    $database = dbConnect();

    $statement = $database->query("SELECT * FROM card WHERE new = 'Y' ORDER BY created_at DESC LIMIT 4");

    $cards = [];
    while ($row = $statement->fetch())
    {
        $card = [
            'id' => $row['id'],
            'name' => $row['name'],
            'category' => $row['category'],
            'price' => $row['price'],
            'description' => $row['description'],
            'new' => $row['new'],
            'created_at' => $row['created_at']
        ];

        $cards[] = $card;
    }

	return $cards;
}

// getPlush
function getAllPlush(): array
{
    $database = dbConnect();

    $statement = $database->query("SELECT * FROM plush WHERE new = 'Y' ORDER BY created_at DESC LIMIT 4");

    $plushs = [];
    while ($row = $statement->fetch())
    {
        $plush = [
            'id' => $row['id'],
            'name' => $row['name'],
            'category' => $row['category'],
            'price' => $row['price'],
            'description' => $row['description'],
            'new' => $row['new'],
            'created_at' => $row['created_at']
        ];

        $plushs[] = $plush;
    }

	return $plushs;
}
