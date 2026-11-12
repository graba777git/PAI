<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     require "db_connect.php";
    require "nav.php";

    if(!$db_ok) {
        echo "najpierw utworz baze danych";
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tytul = mysqli_real_escape_string($conn, $_POST["tytul"]);
            $gatunek = mysqli_real_escape_string($conn, $_POST["gatunek"]);
            $platforma = mysqli_real_escape_string($conn, $_POST["platforma"]);
            $rok = (int)$_POST["rok wydarzenia"];
            $ocena = (float)$_POST["ocena"]; 

            $sql = "INSERT INTO gry
            (tytul, gatunek, platforma, rok_wydarzenia, ocena)
            VALUES
            ('$tytul', '$gatunek', '$platforma', '$rok', '$ocena')";

            if (mysqli_query($conn, $sql)){
                echo "gra zostala dodana!";
            } else {
                echo "blad dodawania gry,";
            }
    }
}
    ?>
</body>
</html>