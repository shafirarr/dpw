<?php
include "koneksi.php";

if (isset($_GET["id_dosen"])) {
    $id = $_GET["id_dosen"];

    $query        = "DELETE FROM tbl_dosen WHERE id_dosen = '$id'";
    $hasil_query  = mysqli_query($link, $query);

    if (!$hasil_query) {
        die("Gagal menghapus data: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}

header("location:viewdosen.php");
?>