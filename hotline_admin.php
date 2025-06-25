<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hotline Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .content-box {
      max-width: 600px;
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
    .contact-item {
      margin: 15px 0;
      padding: 15px;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      background-color: #f1f5ff;
    }
    .contact-item i {
      font-size: 20px;
      margin-right: 10px;
      color: #2c7be5;
    }
    .contact-item a {
      text-decoration: none;
      color: black;
    }
    .contact-label {
      font-weight: 600;
      margin-bottom: 3px;
    }

  </style>
</head>
<body>

<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="dashboard.php">Sistem Pakar Cabai</a>
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

    <h2 class="mb-4 text-primary"><a href="dashboard.php" class="back-link mb-3 d-inline-block"><i class="bi bi-arrow-left-circle"></i></a>Hotline & Kontak Admin</h2>

    <p>Jika Anda memerlukan bantuan lebih lanjut mengenai diagnosa atau perawatan tanaman cabai yang terkena Layu Fusarium, silakan hubungi kontak di bawah ini:</p>

    <div class="contact-item">
      <div class="contact-label"><i class="bi bi-person-circle"></i>Nama</div>
      <div>Admin Diagnosa Fusarium</div>
    </div>

    <div class="contact-item">
      <div class="contact-label"><i class="bi bi-telephone-fill"></i>Telepon / WhatsApp</div>
      <div><a href="https://wa.me/6281234567890" target="_blank">+62 812-3456-7890</a></div>
    </div>

    <div class="contact-item">
      <div class="contact-label"><i class="bi bi-envelope-fill"></i>Email</div>
      <div><a href="mailto:admin@fusariumexpert.id">admin@fusariumexpert.id</a></div>
    </div>

    <div class="contact-item">
      <div class="contact-label"><i class="bi bi-geo-alt-fill"></i>Alamat</div>
      <div>Jl. Pertanian No. 17, Kabupaten Cabai Sehat, Indonesia</div>
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
