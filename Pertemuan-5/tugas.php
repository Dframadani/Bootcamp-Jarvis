<?php 

// Buat class kendaraan
class Kendaraan {

    // Properti pada class kendaraan
    public $tipe;
    public $merek;

    // kontruktor class kendaraab
    public function __construct($tipe, $merek){
        $this->tipe = $tipe;
        $this->merek = $merek;
    }

    // Method pada class kendaraan
    public function spek() {
        return "kendaraan ini adalah ". $this->tipe . " bermerek" . $this->merek . "." ;  
     }
}

// Buat class mobil yang mewarisi class kendaraan
class Mobil extends Kendaraan {

    // menambahkan properti baru "tahun
    public $tahun;

    // konstruktor class Mobil
    public function __construct($tipe, $merek, $tahun){
        parent::__construct($tipe, $merek);
        $this->tahun = $tahun;
    }

    // method baru class Mobil
    public function spekLengkap() {
        return "kendaraan ini adalah ". $this->tipe. " bermerek ". $this->merek. " keluaran tahun ". $this->tahun. "." ;  
     }
}

// Buat object dari class Mobil
$Mazda6 = new Mobil("Mazda6", "Mazda", 2023  );

echo $Mazda6->spekLengkap();

?>