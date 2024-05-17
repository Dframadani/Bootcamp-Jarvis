<?php
echo "Contoh For Loop:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Nomor: $i<br>";
}
echo "<br>Contoh While Loop:<br>";
$j = 1;
while ($j <= 5) {
    echo "Nomor: $j<br>";
    $j++;
}
echo "<br>Contoh Do-While Loop:<br>";
$k = 1;
do {
    echo "Nomor: $k<br>";
    $k++;
} while ($k <= 5);
echo "<br>Contoh Foreach Loop:<br>";
$arrayBuah = array("Apel", "Pisang", "Jeruk", "Mangga");

foreach ($arrayBuah as $buah) {
    echo "Buah: $buah<br>";
}

// Foreach loop untuk associative array
echo "<br>Contoh Foreach Loop dengan Associative Array:<br>";
$arrayHargaBuah = array(
    "Apel" => 10000,
    "Pisang" => 5000,
    "Jeruk" => 8000,
    "Mangga" => 12000
);

foreach ($arrayHargaBuah as $buah => $harga) {
    echo "Buah: $buah, Harga: Rp $harga<br>";
}
?>