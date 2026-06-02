<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Perulangan 2 - Ganjil/Genap</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; }
        .container { max-width: 400px; margin: auto; background: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h2 { text-align: center; color: #2c3e50; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        td { padding: 10px; border-bottom: 1px solid #eee; text-align: center; }
        .genap { color: #27ae60; font-weight: bold; }
        .ganjil { color: #c0392b; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Ganjil / Genap</h2>
    <table>
        <?php
        $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);
        
        foreach ($angka as $nilai) {
            $status = ($nilai % 2 == 0) ? "Genap" : "Ganjil";
            $class = ($nilai % 2 == 0) ? "genap" : "ganjil";
            
            echo "<tr>
                    <td>Nomor: $nilai</td>
                    <td class='$class'>$status</td>
                  </tr>";
        }
        ?>
    </table>
</div>

</body>
</html>