<?php
// Mengecek apakah tombol edit telah diklik [cite: 421]
if (isset($_POST['edit'])) {
    // Buat koneksi dengan database [cite: 425]
    include("koneksi.php");

    // Membuat variabel untuk menampung data dari form edit [cite: 430]
    $id         = $_POST['id_dosen'];
    $nama_dosen = $_POST['nama_dosen'];
    $no_hp      = $_POST['no_hp'];

    // Buat dan jalankan query UPDATE sesuai nama kolom database kamu
    $query  = "UPDATE tbl_dosen SET nama_dosen = '$nama_dosen', no_hp = '$no_hp' WHERE id_dosen = '$id'";
    $result = mysqli_query($link, $query);

    // Periksa hasil query apakah ada error [cite: 448]
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    // Lakukan redirect ke halaman viewdosen.php [cite: 456]
    header("location:viewdosen.php");
}
?>