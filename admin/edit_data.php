<?php
require 'function.php';
$id = $_GET["id"];

// echo "Id nya adalah = ". $id . "<hr>" ;

$produk = query_db("SELECT * FROM produk WHERE id = $id")[0];

if (isset($_POST["submit"])) {

        if (edit_data($_POST) > 0) {
            echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="page-form">

<div class="container">

    <div class="form-card">

        <h3>Edit Data Produk</h3>

        <form action="" method="post">

            <input type="hidden" name="id" value="<?php echo $produk["id"] ?>">

            <div class="form-group">
                <label for="kode_produk">Kode Produk</label>
                <input type="text" name="kode_produk" value="<?php echo $produk["kode_produk"]?>">
            </div>

            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" value="<?php echo $produk["nama_produk"]?>">
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" value="<?php echo $produk["kategori"]?>">
            </div>

            <div class="form-group">
                <label for="warna">Warna</label>
                <input type="text" name="warna" value="<?php echo $produk["warna"]?>">
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" value="<?php echo $produk["harga"]?>">
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" name="stok" value="<?php echo $produk["stok"]?>">
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" value="<?php echo $produk["gambar"]?>">
            </div>

            <div class="button-group">
                <button type="submit" name="submit" class="btn btn-tambah"> Edit Data </button>
                <a href="index.php" class="btn btn-kembali"> Kembali </a>
            </div>

        </form>

    </div>

</div>

</body>
</html>
