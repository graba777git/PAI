<?php

// $array = [1,2,3,4,5];

// $index_to_remove = 3;
// unset($array[$index_to_remove])
// var_dump($array);
//  usuwanie elementow z tablicy 


$tablica = [1,2,3,4,5,6];
for ($i = 0; $i <count($tablica); $i++){
    $tablica[$i] = 0;
}
echo "<br>";
var_dump($tablica);

echo"<h1> tablice doow wymiarowe</h1>";


$array2D = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
echo "<br>";
echo $array2D[0][0];
echo "<br>";
for( $i=0; $i <count($array2D); $i++){
    for( $j=0; $j <count($array2D[$i]); $j++){
        echo $array2D [$i][$j];
        echo"";
    }
    echo"<br>";

}

$osoby = [
    ["imie" => "jan", "wiek" => 20],
    ["imie" => "anna", "wiek" => 25],
    ["imie" => "piord", "wiek" => 30]
];

foreach($osoby as $wiersz){
    foreach($wiersz as  $element){
        echo $element . " ";
    }
    echo "<br>";
}

for ($i = 0; $i <count($osoby); $i++){
foreach ($osoby[$i] as $elementy){
    echo $elementy . " ";
    echo" ";


}
echo "<br>";
}

//zadanie:
$array4x4 = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12],
    [13,14,15,16],
];

for($i = 0; $i < 4; $i++){
    for($j = 0; $j < 4; $j++){
        if($i ==$j){
            $array4x4[$i][$j] = 0;
        
        }
        echo" ";
    }
    echo"<br>";
}


pritnArray($array4x4);

function pritnArray($array2D){
for( $i=0; $i <count($array2D); $i++){
    for( $j=0; $j <count($array2D[$i]); $j++){
        echo $array2D [$i][$j];
        echo"";
    }
    echo"<br>";
}

}

//zadanie sumuj wszsytkie elementy z tablicy aray4x4

$suma = 0;
for($i = 0; $i < 4; $i++){
    for($j = 0; $j < 4; $j++){
        $suma +=$array4x4[$i][$j];
    }
}
echo "suma:" . $suma;
?>