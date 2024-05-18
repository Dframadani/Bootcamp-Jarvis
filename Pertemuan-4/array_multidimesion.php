<?php  



$sayurSayuran = [
    ["nama" => "Tomat", "warna" => "Merah"],
    ["nama" => "Terong", "warna" => "Ungu"],
    ["nama" => "Sawi", "warna" => "Hijau"],
    ["nama" => "Wortel", "warna" => "Oren"],
    ["nama" => "Bawag Putih", "warna" => "Putih"],
];

?>

<table border="2">
    <tr>
    <th>Nama</th>
    <th>Warna</th>
    <?php foreach ($sayurSayuran as $sayur) { ?>
        <tr>
            <td><?php echo $sayur["nama"];?></td>
            <td><?php echo $sayur["warna"];?></td>
        </tr>
    </tr>
    <?php } ?>

</table>