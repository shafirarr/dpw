<?php
include('koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM t_matakuliah WHERE id='$id'";
$result = mysqli_query($link, $query);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($link).
         " - ".mysqli_error($link));
}

header("location:viewmatakuliah.php");
?>