<?php
include("koneksi.php");

// Mengecek apakah tombol 'edit' di form editmatakuliah.php diklik
if (isset($_POST["edit"])) {
    $db = new Database();
    $con = $db->getConnection();

    $kode_mk = $_POST["kodeMK"];
    $nama_mk = $_POST["namaMK"];
    $sks     = $_POST["sks"];

    // SINKRONISASI DATABASE: Mengubah namaMK -> nama_mk, dan kodeMK -> kode_mk
    $stmt = $con->prepare("UPDATE t_matakuliah SET nama_mk = ?, sks = ? WHERE kode_mk = ?");
    
    // "sii" berarti s = string (nama_mk), i = integer (sks), i = integer (kode_mk)
    $stmt->bind_param("sii", $nama_mk, $sks, $kode_mk);

    if (!$stmt->execute()) {
        die("Gagal memperbarui data di database: " . $stmt->error);
    }
    
    $stmt->close();
    $con->close();
}

// Redirect kembali ke halaman utama setelah sukses
header("location:viewmatakuliah.php?msg=Data mata kuliah berhasil diperbarui!");
exit();
?>