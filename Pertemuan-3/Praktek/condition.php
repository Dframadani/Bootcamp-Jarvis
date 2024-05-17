<?php 
        $nilai = 75;
        if ($nilai >= 85) {
            echo "Nilai Anda A.";
        } elseif ($nilai >= 70) {
            echo "Nilai Anda B.";
        } elseif ($nilai >= 55) {
            echo "Nilai Anda C.";
        } elseif ($nilai >= 40) {
            echo "Nilai Anda D.";
        } else {
            echo "Nilai Anda E.";
        }
        $hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari ini adalah Senin.";
        break;
    case "Selasa":
        echo "Hari ini adalah Selasa.";
        break;
    case "Rabu":
        echo "Hari ini adalah Rabu.";
        break;
    case "Kamis":
        echo "Hari ini adalah Kamis.";
        break;
    case "Jumat":
        echo "Hari ini adalah Jumat.";
        break;
    case "Sabtu":
        echo "Hari ini adalah Sabtu.";
        break;
    case "Minggu":
        echo "Hari ini adalah Minggu.";
        break;
    default:
        echo "Hari tidak valid.";
        break;
}
$usia = 18;
$status = ($usia >= 18) ? "Dewasa" : "Anak-anak";
echo "Status usia: $status.";
 ?>