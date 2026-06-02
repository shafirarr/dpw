<?php
include "koneksi.php";

if (isset($_GET["id_mahasiswa"])) {
    $id = $_GET["id_mahasiswa"];

    $query        = "DELETE FROM tbl_mahasiswa WHERE id_mahasiswa = '$id'";
    $hasil_query  = mysqli_query($link, $query);

    if (!$hasil_query) {
        die("Gagal menghapus data: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}

header("location:viewmahasiswa.php");
?>