<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Galeri Foto</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; }
        h2 { text-align: center; color: #2c3e50; margin-bottom: 30px; }
        
        /* Layout Galeri */
        .gallery-container { 
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); 
            gap: 20px; 
            max-width: 1000px; 
            margin: auto; 
        }
        
        .gallery-item { 
            background: white; 
            padding: 10px; 
            border-radius: 12px; 
            box-shadow: 0 4px 10px rgba(0,0,0,0.1); 
            transition: transform 0.3s ease; 
        }
        
        .gallery-item:hover { transform: scale(1.05); }
        
        .gallery-item img { 
            width: 100%; 
            height: 150px; 
            object-fit: cover; 
            border-radius: 8px; 
        }
        
        .gallery-item small { 
            display: block; 
            margin-top: 8px; 
            color: #7f8c8d; 
            font-size: 0.85em; 
            text-align: center; 
            white-space: nowrap; 
            overflow: hidden; 
            text-overflow: ellipsis; 
        }
    </style>
</head>
<body>

    <h2>Galeri Gambar</h2>
    <div class="gallery-container">
        <?php
        $fileList = glob('gambar/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        
        if (empty($fileList)) {
            echo "<p style='text-align:center;'>Belum ada gambar di folder.</p>";
        } else {
            foreach ($fileList as $filename) {
                echo "<div class='gallery-item'>";
                echo "<img src='$filename' alt='Gambar'>";
                echo "<small>" . basename($filename) . "</small>";
                echo "</div>";
            }
        }
        ?>
    </div>

</body>
</html>