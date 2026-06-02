<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Slip Gaji - Obi</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #ecf0f1; padding: 40px; }
        .invoice { max-width: 450px; margin: auto; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; text-align: center; margin-bottom: 25px; }
        .row { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #eee; }
        .total { font-weight: bold; color: #27ae60; font-size: 1.2em; border-top: 2px solid #2c3e50; padding-top: 15px; margin-top: 10px; }
    </style>
</head>
<body>

<div class="invoice">
    <h2>Slip Gaji Obi</h2>
    <?php
    $gajiPokok = 3250000;
    $tunjanganJabatan = 1200000;
    $gajiKotor = $gajiPokok + $tunjanganJabatan;
    $pajak = $gajiKotor * 0.10;
    $gajiBersih = $gajiKotor - $pajak;

    // Helper function agar rapi
    function formatRupiah($angka) {
        return "Rp " . number_format($angka, 0, ',', '.');
    }
    ?>

    <div class="row"><span>Gaji Pokok:</span> <span><?php echo formatRupiah($gajiPokok); ?></span></div>
    <div class="row"><span>Tunjangan:</span> <span><?php echo formatRupiah($tunjanganJabatan); ?></span></div>
    <div class="row" style="color: #7f8c8d;"><span>Gaji Kotor:</span> <span><?php echo formatRupiah($gajiKotor); ?></span></div>
    <div class="row" style="color: #c0392b;"><span>Pajak (10%):</span> <span>- <?php echo formatRupiah($pajak); ?></span></div>
    <div class="row total"><span>Gaji Bersih:</span> <span><?php echo formatRupiah($gajiBersih); ?></span></div>
</div>

</body>
</html>