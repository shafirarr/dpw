<?php
// Memanggil berkas koneksi database
include 'koneksi.php';

// Mengecek ketersediaan parameter id_mahasiswa di URL halaman utama
if (isset($_GET['id_mahasiswa'])) {
    $id = mysqli_real_escape_string($link, $_GET['id_mahasiswa']);
    
    // Melakukan kueri pengambilan data spesifik berdasarkan id_mahasiswa
    $query = "SELECT * FROM tbl_mahasiswa WHERE id_mahasiswa = '$id'";
    $result = mysqli_query($link, $query);
    
    if (!$result) {
        die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
    
    $data = mysqli_fetch_assoc($result);
    
    if (mysqli_num_rows($result) < 1) {
        die("Data mahasiswa tidak ditemukan.");
    }
} else {
    header("location:viewmahasiswa.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { width: 400px; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 5px; background-color: #f9f9f9; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Edit Data Mahasiswa</h2>
        
        <form action="proses_editmahasiswa.php" method="post">
            
            <input type="hidden" name="id_mahasiswa" value="<?php echo $data['id_mahasiswa']; ?>">

            <div class="form-group">
                <label>NIM:</label>
                <input type="text" name="nim" value="<?php echo $data['nim']; ?>" required>
            </div>
            
            <div class="form-group">
                <label>Nama Mahasiswa:</label>
                <input type="text" name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa']; ?>" required>
            </div>
            
            <div class="form-group">
                <label>Jurusan:</label>
                <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>" required>
            </div>
            
            <div class="form-group">
                <label>Alamat:</label>
                <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required>
            </div>
            
            <div style="text-align: center; margin-top: 20px;">
                <input type="submit" name="edit" value="Simpan Perubahan" style="background-color: #007bff; color: white; padding: 8px 15px; border: none; border-radius: 4px; cursor: pointer;">
                <a href="viewmahasiswa.php" style="margin-left: 10px; color: #555; text-decoration: none; border: 1px solid #ccc; padding: 7px 15px; border-radius: 4px; background-color: #eee;">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>