<?php  

function displayOddNumbers($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
}
$start = 1;
$end = 15;
echo "Angka ganjil dari $start sampai $end adalah: ";
displayOddNumbers($start, $end);
echo "<br>";