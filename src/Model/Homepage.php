<?php

require_once('src/Db/dbConnect.php');

function getNew(): array
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

function getPromo(): array
{
    $database = dbConnect();

    $promos = [];

    $figurines = getPromoFigurine();
    $cards = getPromoCard();
    $plushs = getPromoPlush();

    $promos[] = array_merge($figurines, $cards, $plushs);

    foreach ($promos as $key => $value)
    {
        $promos = $value;
    }

	return $promos;
}

// getNew()

function getNewFigurine(): array
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
            'promo' => $row['promo'],
            'uniqid' => $row['uniqid'],
            'created_at' => $row['created_at']
        ];

        $figurines[] = $figurine;
    }

	return $figurines;
}

function getNewCard(): array
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
            'promo' => $row['promo'],
            'uniqid' => $row['uniqid'],
            'created_at' => $row['created_at']
        ];

        $cards[] = $card;
    }

	return $cards;
}

function getNewPlush(): array
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
            'promo' => $row['promo'],
            'uniqid' => $row['uniqid'],
            'created_at' => $row['created_at']
        ];

        $plushs[] = $plush;
    }

	return $plushs;
}

// getPromo()

function getPromoFigurine(): array
{
    $database = dbConnect();

    $statement = $database->query("SELECT * FROM figurine WHERE promo = 'Y' ORDER BY created_at DESC LIMIT 4");

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

// getCard
function getPromoCard(): array
{
    $database = dbConnect();

    $statement = $database->query("SELECT * FROM card WHERE promo = 'Y' ORDER BY created_at DESC LIMIT 4");

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

// getPlush
function getPromoPlush(): array
{
    $database = dbConnect();

    $statement = $database->query("SELECT * FROM plush WHERE promo = 'Y' ORDER BY created_at DESC LIMIT 4");

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
