<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h4>Products Form</h4>
<form action="./save.php" method="post">
    <input placeholder="name" name="name" type="text"/><br><br>
    <input placeholder="price" name="price" type="number"/><br><br>
    <input placeholder="stock" name="stock" type="number"/><br><br>
    <button>submit</button><br><br>
</form>

<br>
<br>
<hr>
<br>

<h4>Customers Form</h4>
<form action="./saveCustomers.php" method="post">
    <input placeholder="name" name="name" type="text"/><br><br>
    <input placeholder="lastName" name="lastName" type="text"/><br><br>
    <input placeholder="address" name="address" type="text"/><br><br>
    <input placeholder="cerditCard" name="cerditCard" type="number"/><br><br>
    <input placeholder="date" name="date" type="date"/><br><br>
    <button>submit</button>
</form>
    
</body>
</html>