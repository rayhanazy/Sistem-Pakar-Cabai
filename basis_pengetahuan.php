<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Basis Pengetahuan - Layu Fusarium</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .content-box {
      max-width: 950px;
      margin: 30px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
    h2 {
      color: #2c7be5;
      font-weight: bold;
    }
    .back-link {
      text-decoration: none;
      color: #2c7be5;
      font-size: 25px;
      margin-right: 30px;
    }
    table th {
      background-color: #e9ecef;
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

      <h2 class="mb-4"><a href="index.html" class="back-link mb-3 d-inline-block"><i class="bi bi-arrow-left-circle"></i></a>Basis Pengetahuan</h2>

      <p>
        Basis pengetahuan pada sistem pakar diagnosa penyakit Layu Fusarium berisi kumpulan aturan (rule) dan nilai <strong>Certainty Factor (CF)</strong> untuk menentukan tingkat kepastian suatu diagnosis. Berikut adalah daftar gejala yang digunakan beserta nilai CF-nya.
      </p>

      <div class="table-responsive mt-4">
        <table class="table table-bordered">
          <thead class="text-center">
            <tr>
              <th>No</th>
              <th>Kode Gejala</th>
              <th>Deskripsi Gejala</th>
              <th>CF (Certainty Factor)</th>
              <th>Diagnosa</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td>G01</td>
              <td>Daun menguning dari bawah ke atas</td>
              <td class="text-center">0.8</td>
              <td rowspan="6" class="text-center align-middle">Layu Fusarium</td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>G02</td>
              <td>Tanaman layu siang hari dan segar sore hari</td>
              <td class="text-center">0.7</td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td>G03</td>
              <td>Batang bagian bawah menghitam</td>
              <td class="text-center">0.9</td>
            </tr>
            <tr>
              <td class="text-center">4</td>
              <td>G04</td>
              <td>Akar membusuk</td>
              <td class="text-center">0.8</td>
            </tr>
            <tr>
              <td class="text-center">5</td>
              <td>G05</td>
              <td>Daun rontok tiba-tiba</td>
              <td class="text-center">0.6</td>
            </tr>
            <tr>
              <td class="text-center">6</td>
              <td>G06</td>
              <td>Tanaman mati perlahan</td>
              <td class="text-center">0.95</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p class="mt-4">
        Semakin tinggi nilai <strong>CF</strong>, maka gejala tersebut semakin kuat menunjukkan kemungkinan tanaman terkena Layu Fusarium. Proses inferensi akan menggabungkan nilai CF dari setiap gejala untuk menghasilkan kesimpulan akhir.
      </p>
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
