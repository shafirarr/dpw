<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1 - PHP Dasar</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding: 40px; background-color: #f0f2f5; }
        .container { background-color: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); max-width: 600px; margin: auto; text-align: center; }
        h1 { color: #2c3e50; }
        .php-output { color: #27ae60; font-weight: bold; font-size: 1.2em; margin-top: 20px; }
        .comment-note { color: #7f8c8d; font-style: italic; margin-top: 15px; }
    </style>
</head>
<body>

<div class="container">
    <h1>Halaman PHP saya</h1>

    <?php
    // ini komentar satu baris
    # ini juga komentar satu baris
    
    echo "<p class='php-output'>Hallo, ini halaman dengan menggunakan bahasa PHP!</p>";

    /*
    ini komentar dengan
    banyak baris
    */
    ?>
    
    <p class="comment-note">Kode di atas menggunakan echo untuk menampilkan teks dari PHP.</p>
</div>

</body>
</html>