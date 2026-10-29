<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
        <form action="./" method="GET">
            <label for="name"> imie: </label>
            <input type="text" id="name" name="name" required><br>

        <input type="submit" value="wyslij">
</form>

        <form action="./" method="POST">
            <label for="age"> WIEK: </label>
            <input type="number" id="age" name="age" required><br>

        <input type="submit" value="wyslij">
</form>


        <form action="./" method="POST">
            <label for="name"> Nazwa produktu </label>
            <input type="text" id="name" name="name" required><br>

                       <label for="price"> Cena </label>
            <input type="number" id="price" name="price" required><br>

                       <label for="howMuch"> ile chcesz kupic  </label>
            <input type="number" id="howMuch" name="howMuch" required><br>


        <input type="submit" value="Oblicz">
</form>




</body>
</html>


<?php
if(isset($_GET['name'])){
    $name = $_GET['name'];
    echo"<h2>Witaj $name !</h2>";
}

if(isset($_POST['age'])){
    $age = $_POST['age'];
    echo"<h2>masz $age !</h2>";
}


if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['howMuch'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $howMuch = $_POST['howMuch'];
    $total = $price * $howMuch;
    echo"<h2>produkt: $name cena: $price zl ilosc: $howMuch laczna ecna: $total zl</h2>";
}
?>