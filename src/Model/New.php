<?php

require_once('src/Db/dbConnect.php');

function getNews(): array
{
    $database = dbConnect();

    $news = [];

    $figurines = getNewsFigurine();
    $cards = getNewsCard();
    $plushs = getNewsPlush();

    $news[] = array_merge($figurines, $cards, $plushs);

    foreach ($news as $key => $value)
    {
        $news = $value;
    }

	return $news;
}

// getNews()

function getNewsFigurine(): array
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
            'uniqid' => $row['uniqid'],
            'created_at' => $row['created_at']
        ];

        $figurines[] = $figurine;
    }

	return $figurines;
}

function getNewsCard(): array
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
            'uniqid' => $row['uniqid'],
            'created_at' => $row['created_at']
        ];

        $cards[] = $card;
    }

	return $cards;
}

function getNewsPlush(): array
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
            'uniqid' => $row['uniqid'],
            'created_at' => $row['created_at']
        ];

        $plushs[] = $plush;
    }

	return $plushs;
}
