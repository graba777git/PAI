<?php
$name = "username";
$value = "bartek";
// setcookie (name, value , expire , path , domin , secure, httponly);
//wymagane: name
// reszat opcjonalna
setcookie($name, $value, time() + (86400*30), "/");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if(isset($_COOKIE[$name])){
        echo "ciacho:". $name. "jest ustawione.";
        echo"wartosc:". $_COOKIE[$name];
    } else {
        echo "ciacho". $name . "nie jest ustawione!";
        }

        //modyfikacja ciaszteczka
    setcookie($name,"nowa wartosc" , $value, time() + (86400*30), "/");
    //usuwanie
    setcookie($name, " " , time() -3600,"/")
    //czy ciasteczka sa wlaczone
    if(count($_COOKIE) > 0){
        echo "ciasteczka wlaczone";
    }else{
        echo "ciasteczko wylaczone";
    }
?>
    

</body>
</html>