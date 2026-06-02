<?php
include 'koneksi.php';

if(isset($_POST['update'])){

    $id       = $_POST['id'];
    $kode_mk  = $_POST['kode_mk'];
    $nama_mk  = $_POST['nama_mk'];
    $sks      = $_POST['sks'];

    $query = "UPDATE t_matakuliah SET
              kode_mk='$kode_mk',
              nama_mk='$nama_mk',
              sks='$sks'
              WHERE id='$id'";

    $result = mysqli_query($link, $query);

    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($link).
             " - ".mysqli_error($link));
    }

    header("location:viewmatakuliah.php");
}
?>