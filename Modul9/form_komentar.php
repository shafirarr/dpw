<?php
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $email = $comment = "";
$tampilkanHasil = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = bersihkan_input($_POST["name"] ?? "");
    $email   = bersihkan_input($_POST["email"] ?? "");
    $comment = bersihkan_input($_POST["comment"] ?? "");
    
    if (!empty($name) || !empty($email) || !empty($comment)) {
        $tampilkanHasil = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Komentar Modern</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; padding: 40px; display: flex; justify-content: center; }
        .card { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); width: 100%; max-width: 500px; }
        h2 { color: #333; margin-bottom: 20px; }
        .input-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; }
        .btn-group { display: flex; gap: 10px; margin-top: 10px; }
        button { padding: 10px 20px; border: none; border-radius: 8px; cursor: pointer; font-weight: bold; }
        .btn-save { background: #27ae60; color: white; }
        .btn-clear { background: #95a5a6; color: white; }
        .result-box { background: #e8f6f3; padding: 15px; border-radius: 8px; margin-bottom: 20px; border-left: 5px solid #27ae60; }
    </style>
</head>
<body>

<div class="card">
    <?php if ($tampilkanHasil): ?>
        <div class="result-box">
            <h3>Data Berhasil Dikirim:</h3>
            <p><strong>Nama:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Komentar:</strong> <?php echo nl2br($comment); ?></p>
        </div>
    <?php endif; ?>

    <h2>Form Komentar</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="input-group">
            <label>Nama:</label>
            <input type="text" name="name" value="<?php echo $name; ?>" required>
        </div>
        <div class="input-group">
            <label>E-mail:</label>
            <input type="text" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group">
            <label>Komentar:</label>
            <textarea name="comment" rows="5"><?php echo $comment; ?></textarea>
        </div>
        
        <div class="btn-group">
            <button type="submit" class="btn-save">Simpan</button>
            <button type="button" class="btn-clear" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>';">Bersihkan</button>
        </div>
    </form>
</div>

</body>
</html>