<?php
require_once('kelas/akunBank.php');

$data1 = new akunBank("801", 350000);
$data1->setNama("Nadhif");

$data2 = new akunBank("802", 570000);
$data2->setNama("Rahma");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul 10 - Informasi Bank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f1f3f5; }
        .bank-card { border-radius: 12px; background-color: #ffffff; border-left: 5px solid #198754; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .bank-card-alt { border-radius: 12px; background-color: #ffffff; border-left: 5px solid #dc3545; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
    </style>
</head>
<body>
<div class="container py-5" style="max-width: 800px;">
    <h3 class="fw-bold mb-4 text-center text-dark">Dashboard Transaksi Perbankan</h3>
    
    <div class="bank-card p-4 mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-bold mb-0 text-success">Informasi Akun Bank 1</h5>
            <span class="badge bg-success-subtle text-success border border-success-subtle font-monospace">No. Akun: <?= $data1->getAccountNumber(); ?></span>
        </div>
        <p class="mb-2"><strong>Pemilik:</strong> <?= $data1->getNama(); ?></p>
        <p class="mb-2"><strong>Saldo Awal:</strong> <span class="text-muted">Rp <?= number_format($data1->tampilkanUang(), 0, ',', '.'); ?></span></p>
        <?php $data1->tambahUang(5000); ?>
        <p class="mb-2"><strong>Aktivitas:</strong> Menabung <span class="text-success fw-semibold">+Rp 5.000</span></p>
        <div class="bg-light p-3 rounded mt-3 d-flex justify-content-between">
            <div><strong>Saldo Akhir:</strong> <span class="text-dark fw-bold">Rp <?= number_format($data1->tampilkanUang(), 0, ',', '.'); ?></span></div>
            <div><strong>Pajak (11%):</strong> <span class="text-danger fw-bold">Rp <?= number_format($data1->hitungPajak(), 0, ',', '.'); ?></span></div>
        </div>
    </div>

    <div class="bank-card-alt p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-bold mb-0 text-danger">Informasi Akun Bank 2</h5>
            <span class="badge bg-danger-subtle text-danger border border-danger-subtle font-monospace">No. Akun: <?= $data2->getAccountNumber(); ?></span>
        </div>
        <p class="mb-2"><strong>Pemilik:</strong> <?= $data2->getNama(); ?></p>
        <p class="mb-2"><strong>Saldo Awal:</strong> <span class="text-muted">Rp <?= number_format($data2->tampilkanUang(), 0, ',', '.'); ?></span></p>
        <?php $data2->kurangiUang(3000); ?>
        <p class="mb-2"><strong>Aktivitas:</strong> Penarikan Saldo <span class="text-danger fw-semibold">-Rp 3.000</span></p>
        <div class="bg-light p-3 rounded mt-3 d-flex justify-content-between">
            <div><strong>Saldo Akhir:</strong> <span class="text-dark fw-bold">Rp <?= number_format($data2->tampilkanUang(), 0, ',', '.'); ?></span></div>
            <div><strong>Pajak (11%):</strong> <span class="text-danger fw-bold">Rp <?= number_format($data2->hitungPajak(), 0, ',', '.'); ?></span></div>
        </div>
    </div>
</div>
</body>
</html>