<?php
//for
for($i = 0; $i <10 ; $i++){

}

//while

$i = 0;
while($i < 5 ){
    echo $i;
    $i++;
}

// do-while

$i = 1
do{
    echo $i;
    $i++
} while ($i <= 5);

//foreach
$tablica = [1,2,3,4,5,];
foreach($tablica as $wartosc){
    echo $wartosc;
}
$owoce = [
    "a"=> "dupa",
    "b"=> "czarek",
    "c"=> "gracjan"
];
foreach($tablica as $klucz => $wartosc){
echo "klucz: ".$klucz."wartosc:". $wartosc;
}

$array = [1,2,3];
$assoc_table = ["imie" => "ana" => "wiek" =>30];
$empty_array = [];
$array2 = array(1,2,3);


$arrayOFNumbers = [1,2,3];
for($i = 0; $i <count($arrayOFNumbers) $i++){
    echo  $arrayOFNumbers [$i];
}


//wtawianie jednego elementow

$number = 10;
$insertArray = [1,2,3];
$insertArray[1] = $number;

// wstawianie elementu do calej tablicy
$number = 10;
$insertArray = [1,2,3]

for($i = 0; $i <count($insertArray) $i++){
    $insertArray [$i] = $number;
}
echo"<br>";
echo var_dump($insertArray);

//wstawianie elementow pod wybrany index
$number = 10;
$index = 0;
$insertArray = [1,2,3];
$insertArray[$index] = $number;




//zadanie 12

for ($i = 1; $i <= 100; $i += 2 ){
    echo $i . "";
}

for ($i = 99; $i >= 1; $i -= 4 ){
    echo $i . "";
}


$i = 1; 
while ($i<= 100) {
    echo $i . "";
    $i+=2;
}

$i = 99; 
while ($i >= 1) {
    echo $i . "";
    $i -= 4;
}

$i = 1;
do{
    echo $i . "";
    $i += 2;
}while($i <=100);

$i = 99;
do{
    echo $i . "";
    $i -= 4;
}while($i >=1);

?>