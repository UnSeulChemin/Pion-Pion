<?php

require_once('src/Db/dbConnect.php');

// getPromos
function getPromos(): array
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


// getFigurine
function getPromoFigurine(): array
{
    $database = dbConnect();

    $statement = $database->query("SELECT * FROM figurine WHERE promo = 'Y' ORDER BY created_at DESC");

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

    $statement = $database->query("SELECT * FROM card WHERE promo = 'Y' ORDER BY created_at DESC");

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

    $statement = $database->query("SELECT * FROM plush WHERE promo = 'Y' ORDER BY created_at DESC");

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
