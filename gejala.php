<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Gejala Penyakit Layu Fusarium</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .content-box {
      max-width: 900px;
      margin: 30px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
    .back-link {
      text-decoration: none;
      color: #2c7be5;
      font-size: 25px;
      margin-right: 30px;
    }
    h2 {
      color: #2c7be5;
      font-weight: bold;
    }
    .gejala-item {
      margin-bottom: 25px;
    }
    .gejala-item h5 {
      color: #343a40;
      font-weight: 600;
    }
  </style>
</head>
<body>

<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Sistem Pakar Cabai</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="content-box">

      <h2 class="mb-4"><a href="index.html" class="back-link mb-3 d-inline-block"><i class="bi bi-arrow-left-circle"></i></a>Gejala-Gejala Layu Fusarium</h2>

      <p>
        Gejala-gejala penyakit <strong>Layu Fusarium</strong> pada tanaman cabai biasanya muncul secara bertahap dan terkadang menyerupai kekurangan air atau hama lain. Penyakit ini menyerang pembuluh xilem tanaman sehingga menghambat aliran air dan nutrisi dari akar ke seluruh bagian tanaman.
        Pengenalan dini terhadap gejala sangat penting untuk menghindari penyebaran penyakit secara meluas.
      </p>

      <div class="gejala-item">
        <h5>1. Daun Menguning dari Bawah</h5>
        <p>Gejala awal biasanya ditandai dengan daun bagian bawah menguning secara perlahan. Proses ini naik ke atas seiring dengan perkembangan penyakit.</p>
      </div>

      <div class="gejala-item">
        <h5>2. Tanaman Layu Siang Hari dan Segar Sore</h5>
        <p>Tanaman tampak layu saat terik siang hari, namun kembali segar saat suhu menurun. Ini menunjukkan adanya gangguan pada sistem penyerapan air.</p>
      </div>

      <div class="gejala-item">
        <h5>3. Batang Bagian Bawah Menghitam</h5>
        <p>Bagian pangkal batang berubah warna menjadi cokelat tua hingga kehitaman akibat pembusukan jaringan yang disebabkan oleh infeksi jamur.</p>
      </div>

      <div class="gejala-item">
        <h5>4. Akar Membusuk</h5>
        <p>Akar tanaman menunjukkan kerusakan dan busuk. Warna akar menjadi gelap dan struktur akar rapuh serta mudah patah.</p>
      </div>

      <div class="gejala-item">
        <h5>5. Daun Rontok Tiba-Tiba</h5>
        <p>Daun yang tampak sehat dapat rontok dengan tiba-tiba. Hal ini merupakan efek lanjutan dari terganggunya pasokan nutrisi ke daun.</p>
      </div>

      <div class="gejala-item">
        <h5>6. Tanaman Mati Perlahan</h5>
        <p>Apabila tidak ditangani, tanaman akan mati secara perlahan mulai dari layu hingga mengering seluruhnya. Kerusakan sistem akar menjadi penyebab utama.</p>
      </div>
    </div>
  </div>

<!-- Modal Konfirmasi Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0">
      <div class="modal-header bg-warning text-dark">
        <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body text-center">
        <p>Apakah Anda yakin ingin keluar dari sistem?</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="logout.php" class="btn btn-danger">Logout</a>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
