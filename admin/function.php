<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "salmeira_db");

function query_db($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah_data($data){
    global $conn;

    $kode_produk = $data["kode_produk"];
    $nama_produk = $data["nama_produk"];
    $kategori = $data["kategori"];
    $warna = $data["warna"];
    $harga = $data["harga"];
    $stok = $data["stok"];

    // upload gambar
    $gambar = upload_gambar($kode_produk, $nama_produk);
    if( !$gambar ){
        return false;
    }

    $query = "INSERT INTO produk
              (kode_produk, nama_produk, kategori, warna, harga, stok, gambar)
              VALUES
              ('$kode_produk', '$nama_produk', '$kategori', '$warna', '$harga', '$stok', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus_data($id){
    global $conn;

    $query = "DELETE FROM produk WHERE id = $id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function edit_data($data){
    global $conn;

    // var_dump($data);

    $id = $data["id"];
    $kode_produk = $data["kode_produk"];
    $nama_produk = $data["nama_produk"];
    $kategori = $data["kategori"];
    $warna = $data["warna"];
    $harga = $data["harga"];
    $stok = $data["stok"];
    $gambar = $data["gambar"];

    $query = "UPDATE produk SET
                kode_produk = '$kode_produk',
                nama_produk = '$nama_produk',
                kategori = '$kategori',
                warna = '$warna',
                harga = '$harga',
                stok = '$stok',
                gambar = '$gambar'
              WHERE id = $id
            ";
    // var_dump($query); die;
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// search
function cari_data($keyword) {
    global $conn;

    $keyword = mysqli_real_escape_string($conn, $keyword);

    $query = "SELECT * FROM produk
              WHERE
              kode_produk LIKE '%$keyword%' OR
              nama_produk LIKE '%$keyword%' OR
              kategori LIKE '%$keyword%' OR
              warna LIKE '%$keyword%'";

    return query_db($query);
}

// fungsi untuk upload gambar
function upload_gambar($kode_produk, $nama_produk){

// setting file
$namaFile = $_FILES['gambar']['name'];
$ukuranFile = $_FILES['gambar']['size'];
$error = $_FILES['gambar']['error'];
$tmpName = $_FILES['gambar']['tmp_name'];

// cek apakah ada file yang di upload atau tidak oleh si user saat mengisi form
if( $error === 4 ){
    echo "(<script>
        alert('Kamu belum upload file, silahkan upload file terlebih dahulu!');
        </script>
    ";
    return false;

}

// cek lagi apakah yang diupload oleh user filenya berupa gambar atau bukan
$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
$ekstensiGambar = explode('.', $namaFile);
$ekstensiGambar = strtolower(end($ekstensiGambar));
if (!in_array($ekstensiGambar,$ekstensiGambarValid)){
    echo "(<script>
        alert('File yang kamu upload itu bukan jpg/jpeg/png!');
        </script>
    ";
    return false;
}

// bikin aturan terkait ukuran file
// cek jika ukuran file yang diinput oleh user terlalu besar atau tidak
// maks -- >5MB
if( $ukuranFile > 5000000 ){
    echo "(<script>
        alert('File yang kamu upload terlalu besar ukurannya!');
        </script>
    ";
    return false;
}

// setelah melalui beberapa if, file yang diinput siap diupload
$namaFileBaru = $kode_produk . "_" . $nama_produk;
$namaFileBaru .= "_" ;
$namaFileBaru .= $ekstensiGambar;

move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

return $namaFileBaru;

}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $konfirmasi_password = mysqli_real_escape_string($conn, $data["konfirmasi_password"]);

    // cek username apabila sudah ada di database atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar! Gunakan username lainnya!');
              </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $konfirmasi_password) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
    return mysqli_affected_rows($conn);
}

?>
