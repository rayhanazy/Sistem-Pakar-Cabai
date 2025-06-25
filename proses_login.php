<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
  $_SESSION['login'] = true;
  $_SESSION['username'] = $username;
  header("Location: index.html");
  exit();
} else {
  echo "<script>alert('Username atau password salah'); window.location.href='index.php';</script>";
}
