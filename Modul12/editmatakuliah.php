<?php
  include 'koneksi.php';

  $kodeMK = $_GET['kodeMK'] ?? $_GET['kode_mk'] ?? '';

  if (!empty($kodeMK)) {
    $db = new Database();
    $con = $db->getConnection();
    
    // Menggunakan nama kolom di laptopmu (kode_mk)
    $stmt = $con->prepare("SELECT * FROM t_matakuliah WHERE kode_mk = ?");
    $stmt->bind_param("i", $kodeMK);
    
    if (!$stmt->execute()) {
        die("Query Error: " . $stmt->error);
    }
    
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    
    if (!$data) {
        $stmt->close();
        $con->close();
        header("location:viewmatakuliah.php");
        exit;
    }
    // JANGAN TUTUP KONEKSI DI SINI, BIARKAN HTML DI BAWAH MEMBACA DATA NYA DULU
  } else {
    header("location:viewmatakuliah.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mata Kuliah (OOP) — SIA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card form-card">
        <div class="form-title">✏️ Edit Data Mata Kuliah</div>
        <form action="proses_editmatakuliah.php" method="post">
            
            <input type="hidden" name="kodeMK" value="<?php echo $data['kode_mk']; ?>">
            
            <div class="form-group">
                <label for="namaMK">Nama Mata Kuliah</label>
                <input type="text" name="namaMK" id="namaMK" value="<?php echo htmlspecialchars($data['nama_mk']); ?>" required>
            </div>
            <div class="form-group">
                <label for="sks">SKS</label>
                <input type="number" name="sks" id="sks" value="<?php echo htmlspecialchars($data['sks']); ?>" required>
            </div>
            
            <div class="form-actions">
                <button type="submit" name="edit" class="btn btn-success">💾 Update Data</button>
                <a href="viewmatakuliah.php" class="btn btn-danger">← Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php
  // TUTUP KONEKSI DI SINI (Paling bawah setelah HTML selesai)
  $stmt->close();
  $con->close();
?>