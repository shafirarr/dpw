<?php
include 'koneksi.php';

if (isset($_POST['input'])) {
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    // Menyebutkan kolom spesifik yang mau diisi saja (id_dosen otomatis terisi karena Auto Increment)
    $query  = "INSERT INTO tbl_dosen (nama_dosen, no_hp) VALUES ('$namaDosen', '$noHP')";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    header("location:viewdosen.php");
}
?>