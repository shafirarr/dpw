<?php
$target_dir = "gambar/";
// Pastikan folder tersedia
if (!is_dir($target_dir)) mkdir($target_dir, 0777, true);

$pesan = "";
$status = ""; // 'success' atau 'error'

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["gambar"])) {
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check === false) {
        $pesan = "File bukan gambar yang valid.";
        $status = "error";
    } elseif (file_exists($target_file)) {
        $pesan = "Maaf, file dengan nama tersebut sudah ada.";
        $status = "error";
    } elseif ($_FILES["gambar"]["size"] > 500000) {
        $pesan = "Maaf, ukuran file terlalu besar (Maks 500KB).";
        $status = "error";
    } elseif (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
        $pesan = "Maaf, hanya format JPG, JPEG, PNG & GIF yang diizinkan.";
        $status = "error";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $pesan = "Sukses! File <b>" . basename($_FILES["gambar"]["name"]) . "</b> berhasil diupload.";
            $status = "success";
        } else {
            $pesan = "Maaf, terjadi kesalahan sistem saat upload.";
            $status = "error";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Upload Gambar Profesional</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; padding: 40px; display: flex; justify-content: center; }
        .upload-card { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); width: 100%; max-width: 450px; }
        h2 { color: #2c3e50; text-align: center; margin-bottom: 25px; }
        .alert { padding: 15px; border-radius: 8px; margin-bottom: 20px; font-size: 0.9em; }
        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .file-input { margin: 20px 0; padding: 10px; border: 2px dashed #bdc3c7; width: 100%; box-sizing: border-box; border-radius: 8px; }
        button { width: 100%; padding: 12px; background: #27ae60; color: white; border: none; border-radius: 8px; font-weight: bold; cursor: pointer; }
    </style>
</head>
<body>

<div class="upload-card">
    <h2>Upload Gambar</h2>
    
    <?php if ($pesan): ?>
        <div class="alert <?php echo $status; ?>"><?php echo $pesan; ?></div>
    <?php endif; ?>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="gambar" class="file-input" required>
        <button type="submit">Upload Sekarang</button>
    </form>
</div>

</body>
</html>