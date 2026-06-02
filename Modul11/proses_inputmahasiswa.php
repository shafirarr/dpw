<?php
// Memanggil berkas koneksi database db_akademik
include 'koneksi.php';

// Mengecek apakah tombol simpan/input sudah diklik dari form
if (isset($_POST['input'])) {

    // Mengambil data dari form menggunakan key $_POST yang sesuai dengan atribut name di form
    $nim            = mysqli_real_escape_string($link, $_POST['nim']);
    
    // PERBAIKAN UTAMA: Mengubah dari $_POST['nama_mhs'] menjadi $_POST['nama_mahasiswa']
    $nama_mahasiswa = mysqli_real_escape_string($link, $_POST['nama_mahasiswa']);
    
    $jurusan        = mysqli_real_escape_string($link, $_POST['jurusan']);
    $alamat         = mysqli_real_escape_string($link, $_POST['alamat']);

    // Menjalankan perintah SQL menggunakan nama kolom database asli yang benar (nama_mahasiswa)
    $query = "INSERT INTO tbl_mahasiswa (nim, nama_mahasiswa, jurusan, alamat) 
              VALUES ('$nim', '$nama_mahasiswa', '$jurusan', '$alamat')";

    // Jalankan kueri ke database
    $result = mysqli_query($link, $query);

    // Cek jika kueri gagal dijalankan
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    // Jika berhasil, langsung dialihkan kembali ke halaman tabel utama mahasiswa
    header("location:viewmahasiswa.php");
    exit();
} else {
    header("location:viewmahasiswa.php");
    exit();
}
?>