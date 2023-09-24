<?php

require_once('src/Db/dbConnect.php');

// getNews
function getNews(): array
{
    $database = dbConnect();

    $news = [];

    $figurines = getNewFigurine();
    $cards = getNewCard();
    $plushs = getNewPlush();

    $news[] = array_merge($figurines, $cards, $plushs);

    foreach ($news as $key => $value)
    {
        $news = $value;
    }

	return $news;
}


// getFigurine
function getNewFigurine(): array
{
    $database = dbConnect();

    $statement = $database->query("SELECT * FROM figurine WHERE new = 'Y' ORDER BY created_at DESC");

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
            'promo' => $row['promo'],
            'created_at' => $row['created_at']
        ];

        $figurines[] = $figurine;
    }

	return $figurines;
}

// getCard
function getNewCard(): array
{
    $database = dbConnect();

    $statement = $database->query("SELECT * FROM card WHERE new = 'Y' ORDER BY created_at DESC");

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
            'promo' => $row['promo'],
            'created_at' => $row['created_at']
        ];

        $cards[] = $card;
    }

	return $cards;
}

// getPlush
function getNewPlush(): array
{
    $database = dbConnect();

    $statement = $database->query("SELECT * FROM plush WHERE new = 'Y' ORDER BY created_at DESC");

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
            'promo' => $row['promo'],
            'created_at' => $row['created_at']
        ];

        $plushs[] = $plush;
    }

	return $plushs;
}
