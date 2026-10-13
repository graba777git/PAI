<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form action="./" method="POST">
            <label for="name"> imie: </label>
            <input type="text" id="name" name="name"><br>

            <label for="age">wiek : </label>
            <input type="number" id="age" name="age"><br>


             <label for="sex"> plec: </label>
             <input type="radio"  name="sex" value="k"> pani    
             <input type="radio"  name="sex" value="m"> pan

<br>
             <label for="game">ulubiona gra : </label> <br>
             <input type="checkbox"  name="game1" value="GTA"> GTA <br>
             <input type="checkbox"  name="game2" value="FIFA"> FIFA <br>
             <input type="checkbox"  name="game3" value="CS"> CS <br>
             <input type="checkbox"  name="game4" value="COD"> CALL OF DUTY <br>







             <br>

            <input type = "submit">
        </form>

    
    
</body>
</html>








<?php
    if(isset($_POST['name']) && isset($_POST['age']) && !empty($_POST['name'] && !empty($_POST['age']))){
        echo $_POST['name'];
        echo $_POST['age'];
    }else{
        echo"prosze wypelnic wszystkie pola";
    }

//weryfikacja plci
    if(isset($_POST['sex'])){
        if($_POST['sex'] == 'm'){
            echo '<br>';
            echo "pan";
        }else{
            echo '<br>';
            echo "pani";
        }
    }
    //weryfikacja gry
    if(isset($_POST['grame1'])&& $_POST['grame1'] == "GTA"){
        echo "<br>";
        echo "wybrano GTA";
    }

    for($i = 1; $i <= 4; i++){
    if(isset($_POST['game'.$i])){
        echo'<br>'
        echo $_POST['GRAME'. $i]
    }
}
?>