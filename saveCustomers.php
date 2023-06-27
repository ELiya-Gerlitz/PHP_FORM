<?php

$name = $_POST["name"];
$lastName = $_POST["lastName"];
$address = $_POST["address"];
$cerditCard = $_POST["cerditCard"];
$date = $_POST["date"];


$line = "Name: $name, last name: $lastName, address: $address, credit card: $cerditCard, Date: $date" . PHP_EOL;

echo "you are in the save Customers";

file_put_contents("./saveCustomers.txt", $line, FILE_APPEND);

header("location: customers.php");
