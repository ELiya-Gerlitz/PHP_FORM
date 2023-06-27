<?php

$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

$line = "name: $name, price: $price, stock: $stock" . PHP_EOL; // EOL = End Of Line = New Line;

file_put_contents( "./products.txt", $line, FILE_APPEND);

header("location: thanks.php");