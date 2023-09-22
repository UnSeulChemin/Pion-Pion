<?php

require_once('src/Db/dbConnect.php');

function getFigurine(): array
{
    $database = dbConnect();

    $statement = $database->query("SELECT * FROM figurine ORDER BY id");

    $figurines = [];
    while ($row = $statement->fetch())
    {
        $figurine = [
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'description' => $row['description']
        ];

        $figurines[] = $figurine;
    }

	return $figurines;
}
