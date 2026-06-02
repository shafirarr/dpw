<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mata Kuliah</title>
    <style>
        h1 { text-align: center; }
        .container { width: 400px; margin: auto; }
        label { display: inline-block; width: 140px; margin-bottom: 10px; }
        input[type="text"], input[type="number"] { width: 220px; padding: 5px; }
    </style>
</head>
<body>
    <h1>Input Mata Kuliah</h1>
    <div class="container">
        <form action="proses_inputmatakuliah.php" method="post">
            <fieldset>
                <legend>Data Mata Kuliah</legend>
                <p>
                    <label for="kode_mk">Kode MK: </label>
                    <input type="text" name="kode_mk" id="kode_mk" required>
                </p>
                <p>
                    <label for="nama_mk">Nama Mata Kuliah: </label>
                    <input type="text" name="nama_mk" id="nama_mk" required>
                </p>
                <p>
                    <label for="sks">Jumlah SKS: </label>
                    <input type="number" name="sks" id="sks" min="1" max="6" required>
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input" value="Simpan">
                <a href="viewmatakuliah.php">Kembali</a>
            </p>
        </form>
    </div>
</body>
</html>