<?php

require_once('src/Db/dbConnect.php');

function getIdentifier($getId)
{
    $database = dbConnect();

    $tryFigurine = tryFigurineById($getId);
    $tryCard = tryCardById($getId);
    $tryPlush = tryPlushById($getId);

    if ($tryFigurine != null)
    {
        return $tryFigurine;
    }

    else if ($tryCard != null)
    {
        return $tryCard;
    }

    else if ($tryPlush != null)
    {
        return $tryPlush;
    }

    else
    {
        return null;
    }
}

// getIdentifier()

function tryFigurineById($getId)
{
    $database = dbConnect();

	$statement = $database->prepare('SELECT * FROM figurine WHERE uniqid = :getid');
	$statement->bindValue('getid', $getId);
	$statement->execute();

    if ($statement->rowCount() > 0)
    {
        $tryFigurine = [];
        while ($row = $statement->fetch())
        {
            $trySuccess = [
                'id' => $row['id'],
                'name' => $row['name'],
                'category' => $row['category'],
                'price' => $row['price'],
                'description' => $row['description'],
                'new' => $row['new'],
                'promo' => $row['promo'],
                'created_at' => $row['created_at']
            ];
    
            $tryFigurine[] = $trySuccess;
        }
    
        return $tryFigurine;
    }

    else
    {
        return null;
    }
}

function tryCardById($getId)
{
    $database = dbConnect();

	$statement = $database->prepare('SELECT * FROM card WHERE uniqid = :getid');
	$statement->bindValue('getid', $getId);
	$statement->execute();

    if ($statement->rowCount() > 0)
    {
        $tryCard = [];
        while ($row = $statement->fetch())
        {
            $trySuccess = [
                'id' => $row['id'],
                'name' => $row['name'],
                'category' => $row['category'],
                'price' => $row['price'],
                'description' => $row['description'],
                'new' => $row['new'],
                'promo' => $row['promo'],
                'created_at' => $row['created_at']
            ];
    
            $tryCard[] = $trySuccess;
        }
    
        return $tryCard;
    }

    else
    {
        return null;
    }
}

function tryPlushById($getId)
{
    $database = dbConnect();

	$statement = $database->prepare('SELECT * FROM plush WHERE uniqid = :getid');
	$statement->bindValue('getid', $getId);
	$statement->execute();

    if ($statement->rowCount() > 0)
    {
        $tryPlush = [];
        while ($row = $statement->fetch())
        {
            $trySuccess = [
                'id' => $row['id'],
                'name' => $row['name'],
                'category' => $row['category'],
                'price' => $row['price'],
                'description' => $row['description'],
                'new' => $row['new'],
                'promo' => $row['promo'],
                'created_at' => $row['created_at']
            ];
    
            $tryPlush[] = $trySuccess;
        }
    
        return $tryPlush;
    }

    else
    {
        return null;
    }
}
