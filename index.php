<?php
require 'admin/function.php';

$produk = query_db("SELECT * FROM produk");
?>

<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>SALMEIRA | Hijab Collection</title>
   
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <!-- CSS tambahan untuk tampilan SALMEIRA -->
    <style>
      body {
        background: #f7f1eb;
        color: #513b31;
        font-family: Georgia, serif;
      }

      .navbar,
      .card,
      .form-box {
        background: #fffaf5;
      }

      .navbar {
        box-shadow: 0 2px 12px #4b393015;
      }

      .navbar-brand {
        color: #5a4033;
        letter-spacing: 2px;
      }

      .nav-link {
        color: #6c5143;
      }

      .btn-brown {
        background: #6b4b3e;
        color: white;
        border: 0;
      }

      .btn-brown:hover {
        background: #4f382e;
        color: white;
      }

      .hero {
        padding: 130px 0 70px;
      }

      .hero-img {
        width: min(100%, 430px);
        height: 430px;
        object-fit: cover;
        border-radius: 50% 50% 20px 20px;
      }

      .section {
        padding: 75px 0;
      }

      .label {
        color: #9a715d;
        letter-spacing: 3px;
        font-size: 13px;
      }

      .card {
        border: 0;
        border-radius: 18px;
        overflow: hidden;
      }

      .product-img {
        width: 100%;
        height: 320px;
        object-fit: cover;
        background: #eee4db;
      }

      .form-control {
        border-color: #dfd0c4;
      }

      footer {
        background: #4f392f;
        color: #fffaf5;
      }

      @media (max-width: 768px) {
        .hero {
          text-align: center;
          padding-top: 110px;
        }

        .hero-img {
          height: 330px;
          margin-top: 30px;
        }
      }
    </style>
  </head>

  <body>
    <!-- NAVBAR DAN CONTAINER -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <!-- Nama toko -->
        <a class="navbar-brand fw-bold fs-3" href="#beranda"> salmeira. </a>

        <!-- Tombol navbar pada HP -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#menuNavbar"
          aria-controls="menuNavbar"
          aria-expanded="false"
          aria-label="Buka menu navigasi"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu navbar -->
        <div class="collapse navbar-collapse" id="menuNavbar">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <li class="nav-item">
              <a class="nav-link" href="#beranda">Beranda</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#tentang">Tentang</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#koleksi">Koleksi</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="admin/login.php">Log In Admin</a>
            </li>

            <li class="nav-item ms-lg-3">
              <a class="btn btn-brown rounded-pill" href="#koleksi">
                Belanja Sekarang
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- SETUP AWAL / BERANDA -->
    <section id="beranda" class="hero">
      <div class="container">
        <div class="row align-items-center">
          <!-- Kolom teks -->
          <div class="col-lg-6">
            <span class="label fw-bold"> ELEGANT HIJAB COLLECTION </span>

            <h1 class="display-2 fw-bold mt-3">
              Elegan dalam<br />
              setiap <em>langkah.</em>
            </h1>

            <p class="lead text-secondary">
              Temukan koleksi hijab SALMEIRA yang sederhana, anggun, dan nyaman
              untuk menemani setiap aktivitasmu.
            </p>

            <a href="#koleksi" class="btn btn-brown btn-lg rounded-pill mt-3">
              Lihat Koleksi
            </a>
          </div>

          <!-- Kolom gambar -->
          <div class="col-lg-6 text-center">
            <img
              src="image/Hijab instant.png"
              class="hero-img shadow"
              alt="Hijab instant SALMEIRA"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- TENTANG SALMEIRA -->
    <section id="tentang" class="section">
      <div class="container">
        <!-- Judul section -->
        <div class="text-center mb-5">
          <span class="label fw-bold">TENTANG SALMEIRA</span>

          <h2 class="fw-bold mt-2">Simple, Elegant, Comfortable</h2>

          <p class="text-secondary">
            Koleksi hijab untuk gaya sehari-hari yang tetap elegan.
          </p>
        </div>

        <!-- GRID INFORMASI KEUNGGULAN -->
        <div class="row g-4">
          <!-- Keunggulan 1 -->
          <div class="col-12 col-md-4">
            <div class="card h-100 p-4 shadow-sm">
              <i class="bi bi-stars fs-2"></i>

              <h4 class="mt-3">Elegan</h4>

              <p class="text-secondary mb-0">
                Desain sederhana dengan warna lembut yang mudah dipadukan.
              </p>
            </div>
          </div>

          <!-- Keunggulan 2 -->
          <div class="col-12 col-md-4">
            <div class="card h-100 p-4 shadow-sm">
              <i class="bi bi-heart fs-2"></i>

              <h4 class="mt-3">Nyaman</h4>

              <p class="text-secondary mb-0">
                Pilihan hijab untuk aktivitas sehari-hari maupun acara tertentu.
              </p>
            </div>
          </div>

          <!-- Keunggulan 3 -->
          <div class="col-12 col-md-4">
            <div class="card h-100 p-4 shadow-sm">
              <i class="bi bi-gem fs-2"></i>

              <h4 class="mt-3">Berkualitas</h4>

              <p class="text-secondary mb-0">
                Model hijab rapi untuk gaya hijab modern.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- GRID SYSTEM / KOLEKSI HIJAB -->
    <section id="koleksi" class="section" style="background: #eee5dc">
      <div class="container">
        <!-- Judul section -->
        <div class="text-center mb-5">
          <span class="label fw-bold">OUR COLLECTION</span>

          <h2 class="fw-bold mt-2">Koleksi Hijab SALMEIRA</h2>

          <p class="text-secondary">
            Pilih model hijab sesuai gaya dan kebutuhanmu.
          </p>
        </div>

        <!-- GRID KOLEKSI
                 col-md-4 = 3 kartu dalam satu baris di desktop
                 col-12 = kartu tersusun ke bawah pada HP -->
        <div class="row g-4">
          <!-- PRODUK 1: PASMINAH -->
          <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
              <img
                src="image/Hijab pasminah.png"
                class="product-img"
                alt="Hijab pasminah SALMEIRA"
              />

              <div class="card-body p-4">
                <h4 class="fw-bold">Pasminah</h4>

                <p class="text-secondary">
                  Tampilan anggun untuk berbagai kesempatan.
                </p>

                <button
                  type="button"
                  class="btn btn-brown rounded-pill"
                  data-bs-toggle="modal"
                  data-bs-target="#modalPesan"
                >
                  Pilih
                </button>
              </div>
            </div>
          </div>

          <!-- PRODUK 2: HIJAB SEGI TIGA -->
          <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
              <img
                src="image/Hijab segitiga.png"
                class="product-img"
                alt="Hijab segitiga SALMEIRA"
              />

              <div class="card-body p-4">
                <h4 class="fw-bold">Segitiga</h4>

                <p class="text-secondary">
                  Model klasik yang mudah dibentuk sehari-hari.
                </p>

                <button
                  type="button"
                  class="btn btn-brown rounded-pill"
                  data-bs-toggle="modal"
                  data-bs-target="#modalPesan"
                >
                  Pilih
                </button>
              </div>
            </div>
          </div>

          <!-- PRODUK 3: HIJAB INSTANT -->
          <div class="col-12 col-md-4">
            <div class="card h-100 shadow-sm">
              <img
                src="image/Hijab instant.png"
                class="product-img"
                alt="Hijab instant SALMEIRA"
              />

              <div class="card-body p-4">
                <h4 class="fw-bold">Hijab Instant</h4>

                <p class="text-secondary">
                  Praktis untuk tampilan rapi dengan mudah.
                </p>

                <button
                  type="button"
                  class="btn btn-brown rounded-pill"
                  data-bs-toggle="modal"
                  data-bs-target="#modalPesan"
                >
                  Pilih
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FORM KONTAK -->
    <section id="kontak" class="section">
      <div class="container">
        <!-- Judul section -->
        <div class="text-center mb-5">
          <span class="label fw-bold">CONTACT US</span>

          <h2 class="fw-bold mt-2">Hubungi SALMEIRA</h2>

          <p class="text-secondary">
            Ada pertanyaan tentang koleksi kami? Kirim pesan di sini.
          </p>
        </div>

        <!-- Form dibuat di tengah halaman -->
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <!-- Card form -->
            <div class="card p-4 p-md-5 shadow-sm">
              <form id="formKontak">
                <!-- Nama -->
                <div class="mb-3">
                  <label for="nama" class="form-label"> Nama </label>

                  <input
                    type="text"
                    id="nama"
                    class="form-control p-3"
                    placeholder="Masukkan nama kamu"
                    required
                  />

                  <div class="invalid-feedback">Nama wajib diisi.</div>
                </div>

                <!-- Email -->
                <div class="mb-3">
                  <label for="email" class="form-label"> Email </label>

                  <input
                    type="email"
                    id="email"
                    class="form-control p-3"
                    placeholder="contoh@email.com"
                    required
                  />

                  <div class="invalid-feedback">Masukkan email yang valid.</div>
                </div>

                <!-- Pesan -->
                <div class="mb-4">
                  <label for="pesan" class="form-label"> Pesan </label>

                  <textarea
                    id="pesan"
                    class="form-control"
                    rows="4"
                    placeholder="Tulis pesan kamu..."
                    required
                  ></textarea>

                  <div class="invalid-feedback">Pesan wajib diisi.</div>
                </div>

                <!-- Tombol kirim -->
                <button class="btn btn-brown rounded-pill" type="submit">
                  <i class="bi bi-send"></i>
                  Kirim Pesan
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MODAL PILIHAN KOLEKSI -->
    <div
      class="modal fade"
      id="modalPesan"
      tabindex="-1"
      aria-labelledby="judulModalPesan"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- Header modal -->
          <div class="modal-header">
            <h5 class="modal-title" id="judulModalPesan">Pilihan Koleksi</h5>

            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Tutup"
            ></button>
          </div>

          <!-- Isi modal -->
          <div class="modal-body">
            Terima kasih sudah memilih koleksi SALMEIRA. Silakan hubungi kami
            untuk informasi produk.
          </div>

          <!-- Footer modal -->
          <div class="modal-footer">
            <button type="button" class="btn btn-brown" data-bs-dismiss="modal">
              Oke
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL KONFIRMASI PESAN -->
    <div
      class="modal fade"
      id="modalKonfirmasi"
      tabindex="-1"
      aria-labelledby="judulModalKonfirmasi"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- Header modal -->
          <div class="modal-header">
            <h5 class="modal-title" id="judulModalKonfirmasi">
              Konfirmasi Pesan
            </h5>

            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Tutup"
            ></button>
          </div>

          <!-- Isi modal -->
          <div class="modal-body text-center">
            Apakah kamu yakin ingin mengirim pesan ini?
          </div>

          <!-- Tombol modal -->
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Batal
            </button>

            <button type="button" class="btn btn-brown" id="btnKirim">
              Ya, Kirim
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <footer class="py-4 text-center">
      <div class="container">
        <h4 class="fw-bold">salmeira.</h4>

        <p class="mb-2">Elegant hijab collection for your everyday style.</p>

        <small> &copy; 2026 SALMEIRA. All rights reserved. </small>
      </div>
    </footer>

    <!-- JAVASCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JAVASCRIPT FORM KONTAK -->
    <script>
      // Mengambil form kontak
      const form = document.getElementById("formKontak");

      // Mengambil elemen modal konfirmasi
      const modalElement = document.getElementById("modalKonfirmasi");

      // Membuat modal Bootstrap
      const modal = new bootstrap.Modal(modalElement);

      // Ketika tombol Kirim Pesan ditekan
      form.addEventListener("submit", function (event) {
        // Mencegah form langsung dikirim
        event.preventDefault();

        // Mengecek apakah semua input sudah valid
        if (!form.checkValidity()) {
          event.stopPropagation();
          form.classList.add("was-validated");
        } else {
          // Jika valid, tampilkan modal konfirmasi
          modal.show();
        }
      });

      // Ketika tombol Ya, Kirim pada modal ditekan
      document
        .getElementById("btnKirim")
        .addEventListener("click", function () {
          // Menutup modal konfirmasi
          modal.hide();

          // Menampilkan notifikasi
          alert(
            "Pesan berhasil dikirim. Terima kasih sudah menghubungi SALMEIRA.",
          );

          // Mengosongkan form
          form.reset();

          // Menghapus tanda validasi Bootstrap
          form.classList.remove("was-validated");
        });
    </script>
  </body>
</html>
