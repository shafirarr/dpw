<!DOCTYPE html>
<html>
<head>
    <title>Input Data Dosen</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { text-align: center; }
        .container { width: 400px; margin: auto; }
        p { margin-bottom: 15px; }
        label { display: inline-block; width: 110px; }
        input[type="text"] { width: 250px; padding: 5px; }
        input[type="submit"] { padding: 5px 15px; cursor: pointer; }
    </style>
</head>
<body>

    <h1>Input Data</h1>
    
    <div class="container">
        <form id="form_dosen" action="proses_inputdosen.php" method="post">
            <fieldset>
                <legend>Input Data Dosen</legend>
                <p>
                    <label for="namaDosen">Nama Dosen: </label>
                    <input type="text" name="namaDosen" id="namaDosen" required placeholder="Nama Lengkap & Gelar">
                </p>
                <p>
                    <label for="noHP">No HP: </label>
                    <input type="text" name="noHP" id="noHP" placeholder="Contoh: 081222333444" required>
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input" value="Simpan">
                <a href="viewdosen.php" style="margin-left: 10px; text-decoration: none; color: red;">Batal</a>
            </p>
        </form>
    </div>

</body>
</html>