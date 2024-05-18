<?php 
$mobil  = ["Honda","Hyundai","BMW","Mazda"];

// Panjang array
echo count($mobil); // 4
echo "<br>";

// Tambah elemen di akhir
array_push($mobil, "Mazda 6");
print_r($mobil);

// Cek elemen pada array
var_dump(in_array("Hyundai",$mobil)); //true

// menghapus elemen di akhir
$last = array_pop($mobil);
print_r($last);

// menghapus semua elemen
unset($mobil);
?>