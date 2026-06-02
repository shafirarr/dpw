<?php
// Memanggil file koneksi untuk menghubungkan ke database db_akademik
include 'koneksi.php';

// Mengecek apakah tombol simpan/input sudah diklik
if (isset($_POST['input'])) {

    // Mengambil data dari form dan mengamankannya dari karakter aneh/tanda petik
    $kode_mk = mysqli_real_escape_string($link, $_POST['kode_mk']);
    $nama_mk = mysqli_real_escape_string($link, $_POST['nama_mk']);
    $sks     = mysqli_real_escape_string($link, $_POST['sks']);

    // Query SQL menggunakan nama tabel t_matakuliah (bukan tbl_matakuliah)
    $query = "INSERT INTO t_matakuliah (kode_mk, nama_mk, sks) 
              VALUES ('$kode_mk', '$nama_mk', '$sks')";

    // Jalankan query ke database
    $result = mysqli_query($link, $query);

    // Cek jika query gagal dijalankan
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    // Jika berhasil, langsung dialihkan kembali ke halaman tampil data mata kuliah
    header("location:viewmatakuliah.php");
    exit(); // Menghentikan skrip setelah redirect agar aman
}
?>