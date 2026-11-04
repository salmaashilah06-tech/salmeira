<?php
session_start();

if( !isset($_SESSION['session_login']) ){
    header('Location: login.php');
    exit;
}

require 'function.php';
// $produk = query_db("SELECT * FROM produk");

// jumlah data yang di tampilkan per halaman
$jumlahDataPerHalaman = 3;

// hitung jumlah seluruh data
$jumlahData = count(query_db("SELECT * FROM produk"));

// hitung jumlah halaman
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

// Halaman aktif
$halamanAktif = isset($_GET["halaman"]) ? (int) $_GET["halaman"] : 1;

// menentukan awal data
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// Ambil data dari produk berdasarkan pagination
$produk = query_db(
    "SELECT * FROM produk LIMIT $awalData, $jumlahDataPerHalaman"
);

// var_dump($produk)

// jika tombol cari ditekan
    if (isset($_POST["cari"])) {
        $keyword = $_POST["keyword"];
        $produk = cari_data($keyword);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Salmeira</title>
    <link rel="stylesheet" href="style.css">

</head>
<body class="page-index">
    <div class="container">
        <h2 style="text-align: center">Hallo selamat datang <?php echo $_SESSION['username']; ?></h2>
        <div class="menu-admin">
    <a href="../index.php" class="btn btn-home">← Halaman Utama</a>
    <a href="logout.php" class="btn btn-logout">Logout</a>
</div>
        <h3 style="text-align: center">Selamat Datang Di Halaman Admin Salmeira</h3>
        <h3 style="text-align: center">Daftar Produk Salmeira</h3>

        <div class="top-bar">
            <!-- Searching -->
            <form action="" method="post" class="search-box">
                <input type="text" name="keyword" placeholder="Cari produk...">
                <button type="submit" name="cari" class="btn btn-cari">Cari</button>
            </form>
            <!-- untuk tombol tambah data -->
        <a href="tambah_data.php" class= "btn btn-tambah">+ Tambah data</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Warna</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor=1;?>
            <?php foreach ($produk as $data):?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $data["id"]; ?></td>
                <td><?php echo $data["kode_produk"]; ?></td>
                <td><?php echo $data["nama_produk"]; ?></td>
                <td><?php echo $data["kategori"]; ?></td>
                <td><?php echo $data["warna"]; ?></td>
                <td><?php echo $data["harga"]; ?></td>
                <td><?php echo $data["stok"]; ?></td>
                <td>
                    <img src ="img/<?php echo $data["gambar"];?>" alt="" width="90" height="90">

                <td>
                    <a href="edit_data.php?id=<?php echo $data["id"]; ?>" class="btn btn-edit">Edit</a>
                    <a href="hapus_data.php?id=<?php echo $data['id']; ?>"class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus
                </td>

            </tr>
            <?php $nomor++;?>
            <?php endforeach ?>
        </tbody>
    </table>

    <br>
    <br>

     <!--======================-->
     <!--====PAGINATION========-->
     <!--======================-->
     <div class="pagitation-wrapper">
        <div class="pagination">

            <!-- PREVIUOS -->
            <?php if($halamanAktif > 1): ?>
                <a href="?halaman=<?php echo $halamanAktif - 1; ?>" class="prev">
                    &larr; Prev
                </a>
            <?php else: ?>
                <span class ="pagination-disabled"> &larr; Prev </span>
            <?php endif; ?>

            <!-- NOMOR HALAMAN --> 
            <?php for($i=1; $i <= $jumlahHalaman; $i++): ?>
                <?php if($i == $halamanAktif): ?>
                    <a href="?halaman=<?php echo $i; ?>" class="active">
                        <?php echo $i; ?>
                    </a>
                <?php else: ?>
                    <a href="?halaman=<?php echo $i; ?>">
                        <?php echo $i; ?>
                    </a>
                <?php endif; ?>
            <?php endfor; ?>

             <!-- NEXT -->
            <?php if($halamanAktif < $jumlahHalaman): ?>
             <a href="?halaman=<?php echo $halamanAktif + 1; ?>" class="next">
                 Next &rarr;
             </a>
            <?php else: ?>
                <span class="pagination-disabled">
                    Next &rarr;
                </span>
            <?php endif; ?>
        </div>    
    </div>
</div>
</body>
</html>
