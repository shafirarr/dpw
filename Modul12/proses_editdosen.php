<?php
  if (isset($_POST['edit'])) {
    include("koneksi.php");
    $db = new Database();
    $con = $db->getConnection();

    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    // DISESUAIKAN: Mengubah nama kolom tujuan dari noHP menjadi noHp (p kecil) sesuai database laptopmu
    $stmt = $con->prepare("UPDATE t_dosen SET namaDosen = ?, noHp = ? WHERE idDosen = ?");
    $stmt->bind_param("ssi", $namaDosen, $noHP, $id);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }

  header("location:viewdosen.php?msg=Data dosen berhasil diperbarui!");
?>