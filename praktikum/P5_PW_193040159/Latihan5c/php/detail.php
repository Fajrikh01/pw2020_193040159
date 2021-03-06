<?php

// Mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("localtion: ../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$alat_musik = query("SELECT * FROM alat_musik WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5c</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div id="page-wrap">
        <div class="container">
            <div class="gambar">
                <img src="../assets/img/<?= $alat_musik["gambar"]; ?>" alt="">
            </div>
            <div class="keterangan">
                <p>Nama Alat Musik : <?= $alat_musik["nama_alat_musik"]; ?></p>
                <p>Provinsi : <?= $alat_musik["provinsi"]; ?></p>
                <p> Sumber Bunyi : <?= $alat_musik["sumber_bunyi"]; ?></p>
                <p>Cara Memainkan : <?= $alat_musik["cara_memainkan"]; ?></p>
            </div>

            <button class="tombol-kembali"><a href="../index.php" id="tombol">Kembali</a></button>
        </div>
    </div>
</body>

</html>