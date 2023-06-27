<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="refresh" content="8; url=index.php" /> 
</head>
<body>
    <h4>I am in the customers.php . I am supposed to refresh in 5s</h4>
<?php

echo file_get_contents("saveCustomers.txt");
?>
</body>
</html>