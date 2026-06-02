<?php
  include("koneksi.php");
  
  if (isset($_POST["tambah"])) {
    $db = new Database();
    $con = $db->getConnection();

    $nama = $_POST["namaDosen"];
    $hp = $_POST["noHP"]; // Tetap biarkan noHP jika name di atribut form inputdosen.php menggunakan huruf kapital semua

    // DISESUAIKAN: Mengubah nama kolom t_dosen dari noHP menjadi noHp (sesuai database laptopmu)
    $stmt = $con->prepare("INSERT INTO t_dosen (namaDosen, noHp) VALUES (?, ?)");
    $stmt->bind_param("ss", $nama, $hp);

    if (!$stmt->execute()) {
        die("Gagal menambah data: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
  }

  header("location:viewdosen.php?msg=Data dosen berhasil ditambahkan!");
?>