<?php
include 'koneksi.php';

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

// Validasi dasar
if ($username == '' || $password == '') {
  echo "<script>alert('Username dan password tidak boleh kosong'); window.location='register.php';</script>";
  exit();
}

// Cek apakah username sudah digunakan
$cek = $conn->prepare("SELECT id FROM users WHERE username = ?");
$cek->bind_param("s", $username);
$cek->execute();
$cek->store_result();

if ($cek->num_rows > 0) {
  echo "<script>alert('Username sudah terdaftar. Silakan gunakan username lain.'); window.location='register.php';</script>";
} else {
  // Simpan user baru
  $hash = password_hash($password, PASSWORD_DEFAULT);
  $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
  $stmt->bind_param("ss", $username, $hash);
  $stmt->execute();

  echo "<script>alert('Registrasi berhasil. Silakan login.'); window.location='index.php';</script>";
}
?>
