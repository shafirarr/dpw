<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa Baru</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { width: 400px; margin: auto; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; }
        .form-group input { width: 100%; padding: 8px; box-sizing: border-box; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Input Mahasiswa Baru</h2>
        <form action="proses_inputmahasiswa.php" method="post">
            <div class="form-group">
                <label>NIM:</label>
                <input type="text" name="nim" placeholder="Masukkan NIM..." required>
            </div>
            <div class="form-group">
                <label>Nama Mahasiswa:</label>
                <input type="text" name="nama_mahasiswa" placeholder="Masukkan Nama Lengkap..." required>
            </div>
            <div class="form-group">
                <label>Jurusan:</label>
                <input type="text" name="jurusan" placeholder="Masukkan Jurusan..." required>
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <input type="text" name="alamat" placeholder="Masukkan Alamat Rumah..." required>
            </div>
            <input type="submit" name="input" value="Simpan Data" style="background-color: #28a745; color: white; padding: 8px 15px; border: none; border-radius: 4px; cursor: pointer;">
            <a href="viewmahasiswa.php" style="margin-left: 10px; color: #555; text-decoration: none;">Kembali</a>
        </form>
    </div>
</body>
</html>