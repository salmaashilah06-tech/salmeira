<?php
session_start();

if( !isset($_SESSION['session_login']) ){
    header('Location: login.php');
    exit;
}

require 'function.php';

if (isset($_POST['submit'])) {

    if (tambah_data($_POST) > 0) {
        echo "<script>
                alert('Data produk berhasil ditambahkan!');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data produk gagal ditambahkan!');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk Salmeira</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="page-form">
    
<div class="container">

    <div class="form-card">

        <h3>Tambah Produk Salmeira</h3>

        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="kode_produk">Kode Produk</label>
                <input type="text" name="kode_produk" placeholder="Masukkan kode produk">
            </div>

            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" placeholder="Masukkan nama kerudung">
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" placeholder="Masukkan kategori kerudung">
            </div>

            <div class="form-group">
                <label for="warna">Warna</label>
                <input type="text" name="warna" placeholder="Masukkan warna kerudung">
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" placeholder="Masukkan harga produk">
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" name="stok" placeholder="Masukkan jumlah stok">
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar">
            </div>

            <div class="button-group">
                <button type="submit" name="submit" class="btn btn-tambah">
                    Tambah Produk
                </button>
                <a href="index.php" class="btn btn-kembali">Kembali</a>
            </div>

        </form>

    </div>

</div>

</body>
</html>
