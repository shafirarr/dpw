<?php
require_once('kelas/Mahasiswa.php');

$mhs1 = new Mahasiswa("Shafira Rahmaningtyas"); // <-- Pastikan data kamu
$mhs1->setNIM("253307028");                   // <-- Pastikan data kamu
$mhs1->setKelas("TI-2A");                      // <-- Pastikan data kamu
$mhs1->setJurusan("Teknik Informatika");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul 10 - Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5" style="max-width: 600px;">
    <div class="card border-0 shadow">
        <div class="card-header bg-dark text-white text-center py-3">
            <h5 class="mb-0 fw-bold">Kartu Data Praktikan Mahasiswa</h5>
        </div>
        <div class="card-body p-4">
            <table class="table table-borderless mb-0">
                <tr>
                    <td class="text-muted fw-semibold" style="width: 30%;">Nama Lengkap</td>
                    <td class="fw-bold">: <?= $mhs1->getNama(); ?></td>
                </tr>
                <tr>
                    <td class="text-muted fw-semibold">NIM</td>
                    <td class="font-monospace fw-bold">: <?= $mhs1->getNIM(); ?></td>
                </tr>
                <tr>
                    <td class="text-muted fw-semibold">Kelas</td>
                    <td class="fw-bold">: <?= $mhs1->getKelas(); ?></td>
                </tr>
                <tr>
                    <td class="text-muted fw-semibold">Jurusan</td>
                    <td class="text-primary fw-bold">: <?= $mhs1->getJurusan(); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>