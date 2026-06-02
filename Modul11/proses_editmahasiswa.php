<?php
// Memanggil berkas koneksi database db_akademik
include 'koneksi.php';

// Mengecek apakah tombol simpan perubahan (name="edit") telah ditekan
if (isset($_POST['edit'])) {
    
    // Menangkap data dari form editmahasiswa.php
    $id             = mysqli_real_escape_string($link, $_POST['id_mahasiswa']);
    $nim            = mysqli_real_escape_string($link, $_POST['nim']);
    $nama_mahasiswa = mysqli_real_escape_string($link, $_POST['nama_mahasiswa']);
    
    // PASTIKAN: mengambil dari $_POST['jurusan'] sesuai name yang ada di form
    $jurusan        = mysqli_real_escape_string($link, $_POST['jurusan']);
    $alamat         = mysqli_real_escape_string($link, $_POST['alamat']);

    // PERBAIKAN: Menyamakan nama kolom database (jurusan = '$jurusan')
    $query = "UPDATE tbl_mahasiswa SET 
              nim = '$nim', 
              nama_mahasiswa = '$nama_mahasiswa', 
              jurusan = '$jurusan', 
              alamat = '$alamat' 
              WHERE id_mahasiswa = '$id'";

    // Jalankan perintah update ke database
    $result = mysqli_query($link, $query);

    // Cek jika kueri gagal dijalankan
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    // Jika berhasil diubah, alihkan kembali ke halaman utama viewmahasiswa.php
    header("location:viewmahasiswa.php");
    exit();
} else {
    header("location:viewmahasiswa.php");
    exit();
}
?>