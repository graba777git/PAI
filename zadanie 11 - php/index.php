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
            <input type= "text" id="name"> <br>

               <label for="name"> wiek: </label>
            <input type= "text" id="age"> <br>


        <select name = "ticket" id = "ticket">
            <option value="normal">normalny</optiom>
            <option value="ulgowy">ulgowy</optiom>
    </select>

    <input type="submit" value="Oblicz cene">
    </form>

    
    
</body>
</html>





<?php

 $ticket = $_GET['ticket'];
 $age = $_GET['age'];
 $ticketPrice = 0;
 $name = $_GET['name'];

 if($ticket == "normalny" && $age > 7){
    $ticketPrice = 30;
 }else if($ticket == "ulgowy" && $age > 7){
    $ticketPrice = 15;
 } else if($age <= 7 ){
    $ticketPrice = 0;
 }
 echo $ticketPrice;

 echo "czesc," . $_GET['name'] . "!<br>";
 echo "twoj wiek," . $_GET['age'] . "!<br>";
 echo "rodziaj biletu," . $_GET['ticket'] . "!<br>";
 echo "cena biletu," . $ticketPrice . "!<br>";

?>