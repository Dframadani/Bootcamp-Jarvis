<?php  

function displayEvenNumbers($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

$start = 1;
$end = 20;
echo "Angka genap dari $start sampai $end adalah: ";
displayEvenNumbers($start, $end);
echo "<br>";