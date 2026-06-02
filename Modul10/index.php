<?php
require_once('kelas/Manusia.php');

$andi = new Manusia();
$andi->setNama("Andi Pratama");

$budi = new Manusia();
$budi->setNama("Budi Santoso");

$saya = new Manusia();
$saya->setNama("Shafira Rahmaningtyas"); // <-- Pastikan nama kamu sudah benar
$saya->setUmur(19);                     // <-- Pastikan umur kamu sudah benar
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 10 - Data Manusia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .profile-header { background: linear-gradient(135deg, #0d6efd, #0099ff); color: white; border-radius: 15px 15px 0 0; }
    </style>
</head>
<body>
<div class="container py-5">
    <h2 class="text-center mb-5 fw-bold text-dark">Hasil Praktikum Modul 10</h2>
    
    <div class="row g-4 justify-content-center">
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-header bg-secondary text-white fw-bold py-3 text-center">Objek Modul (Andi & Budi)</div>
                <div class="card-body d-flex flex-column justify-content-center text-center">
                    <h5 class="fw-bold mb-1"><?= $andi->getNama(); ?></h5>
                    <p class="text-muted small mb-3">Status: Objek 1</p>
                    <hr>
                    <h5 class="fw-bold mb-1"><?= $budi->getNama(); ?></h5>
                    <p class="text-muted small mb-0">Status: Nama Lengkap Objek 2</p>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card h-100 border border-primary">
                <div class="profile-header p-4 text-center">
                    <div class="rounded-circle bg-white text-primary d-inline-flex align-items-center justify-content-center mb-3 fw-bold fs-3" style="width: 60px; height: 60px;">
                        <?= substr($saya->getNama(), 0, 1); ?>
                    </div>
                    <h4 class="fw-bold mb-0"><?= $saya->getNama(); ?></h4>
                    <small class="opacity-75">Praktikan Pemrograman Web</small>
                </div>
                <div class="card-body px-4 py-4">
                    <div class="d-flex justify-content-between mb-3 border-bottom pb-2">
                        <span class="text-muted fw-semibold">Umur:</span>
                        <span class="text-dark fw-bold"><?= $saya->getUmur(); ?> Tahun</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="text-muted fw-semibold">Identitas NIK:</span>
                        <span class="badge bg-light text-dark border border-dark-subtle px-2 py-2 font-monospace"><?= trim($saya->getNIK()); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>