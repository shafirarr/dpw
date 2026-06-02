<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penghitung Pecahan Uang</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; padding: 40px; }
        .card { max-width: 450px; margin: auto; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; text-align: center; margin-bottom: 25px; }
        .total-box { background: #34495e; color: white; padding: 15px; border-radius: 10px; text-align: center; font-size: 1.2em; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        td { padding: 10px; border-bottom: 1px solid #eee; }
        .nominal { font-weight: bold; color: #3498db; }
        .lembar { text-align: right; font-weight: bold; }
    </style>
</head>
<body>

<div class="card">
    <h2>Pecahan Uang</h2>
    
    <?php
    $jumlah = 1387500;
    ?>
    <div class="total-box">Total: Rp <?php echo number_format($jumlah, 0, ',', '.'); ?></div>

    <table>
        <?php
        $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];
        $sisa = $jumlah;

        foreach ($pecahan as $nominal) {
            $lembar = intdiv($sisa, $nominal);
            $sisa = $sisa % $nominal;
            
            if ($lembar > 0) {
                echo "<tr>
                        <td class='nominal'>Rp " . number_format($nominal, 0, ',', '.') . "</td>
                        <td class='lembar'>$lembar Lembar</td>
                      </tr>";
            }
        }
        ?>
    </table>
    
    <?php if ($sisa > 0) echo "<p style='text-align:center; color:#e74c3c;'>Sisa tidak terhitung: Rp $sisa</p>"; ?>
</div>

</body>
</html>