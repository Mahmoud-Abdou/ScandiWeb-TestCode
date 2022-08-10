<?php

require_once __DIR__."/ProductFactory.php";
require_once __DIR__."/products/DVD.php";
require_once __DIR__."/products/Book.php";
require_once __DIR__."/products/Furniture.php";

$factory = new ProductFactory(array(
    "DVD" => DVD::class,
    "Furniture" => Furniture::class,
    "Book" => Book::class
));

$factory = $factory->formateByType(['type' => 'Furniture']);
var_dump($factory);