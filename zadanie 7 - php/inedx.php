<?php
$array = [1,2,3,4,5];

$array2 = [6,7,8,9,10];

pritnArray($array);

pritnArray($array2);

sumNumbers(6,7,6,7,6,7,6,7);

echo"<br>"; 
echo multiplyNumbers(9,10);
echo"<br>";

echo zamienNaWielkie ("grajcan " );

echo"<br>";
echo czyPierwsza(7);
echo"<br>";



function pritnArray($array){
    for($i = 0; $i <count($array); $i++){
    echo $array[$i];
        }
        echo "<br>" ;
    }




    function sumNumbers(...$x){
        $sum = 0;
        for($i = 0; $i <count($x); $i++){
            echo $x[$i];
            $sum = $sum +$x[$i];
        }
        return $sum;
    }







    function multiplyNumbers($a,$b = 9){
        return $a * $b ;
    }






    function zamienNaWielkie(string $tekst ): string{
    return strtoupper($tekst);

}







function czyPierwsza(int $n) :bool {
    if($n <= 1) {
        return false;
    }


for ($i = 2; $i <= sqrt($n); $i++){
    if($n % $i == 0) {
        return false;
    }
    return true;
}
}

function czyJestPodzielna(int $n1 = 1,int $n2 = 100):int {
    for ($i = $n1; $i <= $n2; $i++){
        if(czyPierwsza($i)){
            echo $i . " ";
        }
    }
}


?>