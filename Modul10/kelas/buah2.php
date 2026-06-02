<?php
class buah2 // Diubah menjadi buah2 agar nama kelas sinkron dengan nama filenya
{
    public $nama;
    public $warna;
    public $bobot;
    
    public function set_name($n) { 
        $this->nama = $n;
    }
    
    // PERBAIKAN: Mengubah modifier dari protected menjadi public
    public function set_color($n) {
        $this->warna = $n;
    }
    
    // PERBAIKAN: Mengubah modifier dari private menjadi public
    public function set_weight($n) {
        $this->bobot = $n;
    }
}

$mango = new buah2();
$mango->set_name('Mango');   // OK
$mango->set_color('Yellow'); // SEKARANG OK (Sudah diubah ke public)
$mango->set_weight('300');   // SEKARANG OK (Sudah diubah ke public)

// Menampilkan hasil data ke layar browser
echo "Nama: " . $mango->nama . "<br>";
echo "Warna: " . $mango->warna . "<br>";
echo "Bobot: " . $mango->bobot . " gram<br>";

/*
Kesimpulan Error (Analisis Kamu yang Sangat Bagus):
Error terjadi ketika kita mencoba memanggil method set_color() dan set_weight() dari luar kelas.
Hal ini disebabkan oleh access modifier:
- method set_color() memiliki access modifier 'protected', sehingga hanya bisa diakses dari dalam class itu sendiri dan class turunannya (subclass).
- method set_weight() memiliki access modifier 'private', sehingga hanya bisa diakses dari dalam class itu sendiri.
Cara memperbaikinya adalah dengan mengubah access modifier kedua method tersebut menjadi 'public' jika memang perlu diakses langsung dari object ($mango). Atau membuat public setter yang membungkusnya.
*/
?>