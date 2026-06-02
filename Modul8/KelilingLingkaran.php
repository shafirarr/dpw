<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Keliling Lingkaran</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; }
        .card { max-width: 400px; margin: auto; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; font-size: 1.4em; text-align: center; }
        .formula { background: #fdf2f9; color: #8e44ad; padding: 10px; border-radius: 8px; text-align: center; font-weight: bold; margin: 15px 0; }
        .result-box { text-align: center; font-size: 1.5em; color: #27ae60; font-weight: bold; margin-top: 20px; }
    </style>
</head>
<body>

<div class="card">
    <h1>Keliling Lingkaran</h1>
    
    <?php
    $r = 15;
    $phi = 3.14;
    $keliling = 2 * $phi * $r;
    ?>

    <div class="formula">Rumus: $2 \times \pi \times r$</div>
    
    <p>Jari-jari (r): <strong><?php echo $r; ?> cm</strong></p>
    <p>Nilai Phi ($\pi$): <strong><?php echo $phi; ?></strong></p>

    <div class="result-box">
        Keliling = <?php echo $keliling; ?> cm
    </div>
</div>

</body>
</html>