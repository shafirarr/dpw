<?php
class buah
{
    public $nama;
    protected $warna;
    private $berat;
    
    // PERBAIKAN: Menambahkan public method untuk mengisi property protected & private
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function setBerat($berat) {
        $this->berat = $berat;
    }

    // Method untuk menampilkan info lengkap buah
    public function tampilkanInfo() {
        return "Nama Buah: {$this->nama}, Warna: {$this->warna}, Berat: {$this->berat} gram";
    }
}

$mango = new buah();
$mango->nama = 'Mango'; // OK

// PERBAIKAN: Diakses melalui method setter public, tidak lagi diakses langsung
$mango->setWarna('Yellow'); 
$mango->setBerat('300'); 

// Menampilkan hasil perbaikan ke layar browser
echo $mango->tampilkanInfo();
?>