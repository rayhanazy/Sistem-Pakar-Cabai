<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit();
}
?>



<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Diagnosa Layu Fusarium</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .chat-box {
      max-width: 600px;
      margin: 40px auto;
      border: 1px solid #ccc;
      border-radius: 10px;
      background: #fff;
      padding: 20px;
    }
    .chat-log { max-height: 400px; overflow-y: auto; margin-bottom: 20px; }
    .chat-bubble {
      padding: 10px 15px;
      margin: 5px 0;
      border-radius: 15px;
      display: inline-block;
      max-width: 80%;
    }
    .bot { background-color: #e2e3e5; align-self: flex-start; }
    .user { background-color: #0d6efd; color: white; align-self: flex-end; text-align: right; }
    .chat-image {
      max-width: 100%;
      border-radius: 10px;
      margin-top: 10px;
    }
    .btn-group { margin-top: 10px; }
    .back-link {
      text-decoration: none;
      color: #2c7be5;
      font-size: 20px;
      margin-right: 130px;
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

  <div class="chat-box">
    <h4 class="text-left mb-3"><a href="index.html" class="back-link mb-3 d-inline-block"><i class="bi bi-arrow-left-circle"></i></a>Diagnosa Layu Fusarium</h4>
    <div class="chat-log d-flex flex-column" id="chatLog"></div>
    <div class="btn-group w-100" role="group" id="btnGroup">
      <button class="btn btn-success" onclick="submitPilihan('Ya')">Ya</button>
      <button class="btn btn-danger" onclick="submitPilihan('Tidak')">Tidak</button>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.29/jspdf.plugin.autotable.min.js"></script>

  <script>
    const pertanyaan = [
      { teks: "Apakah daun menguning dari bawah ke atas?", cf: 0.8, img: "assets/menguning.jpg" },
      { teks: "Apakah tanaman layu siang hari dan segar sore hari?", cf: 0.7, img: "assets/layu.jpg" },
      { teks: "Apakah batang bagian bawah menghitam?", cf: 0.9, img: "assets/batang.jpg" },
      { teks: "Apakah akar membusuk?", cf: 0.8, img: "assets/busuk.jpg" },
      { teks: "Apakah daun rontok tiba-tiba?", cf: 0.6, img: "assets/rontok.jpg" },
      { teks: "Apakah tanaman mati perlahan?", cf: 0.95, img: "assets/mati.jpg" }
    ];

    let index = 0;
    let cfValues = [];
    let jawabanPengguna = [];

    function tampilkanBot(teks, imgUrl = null) {
      const bubble = document.createElement('div');
      bubble.className = 'chat-bubble bot';
      bubble.innerHTML = teks;
      if (imgUrl) {
        const img = document.createElement('img');
        img.src = imgUrl;
        img.alt = "Gambar gejala";
        img.className = "chat-image";
        bubble.appendChild(document.createElement('br'));
        bubble.appendChild(img);
      }
      document.getElementById("chatLog").appendChild(bubble);
      scrollToBottom();
    }

    function tampilkanUser(teks) {
      const bubble = document.createElement('div');
      bubble.className = 'chat-bubble user ms-auto';
      bubble.textContent = teks;
      document.getElementById("chatLog").appendChild(bubble);
      scrollToBottom();
    }

    function scrollToBottom() {
      const chatLog = document.getElementById("chatLog");
      chatLog.scrollTop = chatLog.scrollHeight;
    }

    function submitPilihan(pilihan) {
      tampilkanUser(pilihan);
      cfValues.push(pilihan === "ya" ? pertanyaan[index].cf : 0);
      jawabanPengguna.push(pilihan);
      index++;

      setTimeout(() => {
        if (index < pertanyaan.length) {
          tampilkanBot(pertanyaan[index].teks, pertanyaan[index].img);
        } else {
          const hasil = hitungCF(cfValues);
          const persentase = (hasil * 100).toFixed(2);
          const kesimpulan = hasil >= 0.5
            ? `Kemungkinan besar tanaman terkena Layu Fusarium (${persentase}%)`
            : `Tanaman tidak menunjukkan gejala Layu Fusarium secara dominan (${persentase}%)`;

          const kesimpulanBox = `<div class='chat-bubble bot bg-warning-subtle'>
            <strong>${kesimpulan}</strong><br>
            <button class='btn btn-success btn-sm mt-2' onclick='downloadPDF(jawabanPengguna, "${kesimpulan}")'>Download Hasil Diagnosa (PDF)</button>
            <button class='btn btn-secondary btn-sm mt-2' onclick='location.reload()'>Diagnosa Ulang</button>
          </div>`;
          document.getElementById("chatLog").innerHTML += kesimpulanBox;
          document.getElementById("btnGroup").style.display = "none";
          scrollToBottom();
        }
      }, 500);
    }

    function hitungCF(values) {
      let result = values[0];
      for (let i = 1; i < values.length; i++) {
        result = result + values[i] * (1 - result);
      }
      return result;
    }

    function getSaran(positif) {
      if (positif) {
        return [
          "1. Cabut dan musnahkan tanaman yang terinfeksi untuk mencegah penyebaran.",
          "2. Gunakan fungisida sistemik berbahan aktif seperti benomil atau karbendazim.",
          "3. Lakukan rotasi tanaman, hindari menanam cabai pada lahan yang sama setiap musim.",
          "4. Pastikan drainase tanah baik dan tidak terlalu lembab.",
          "5. Gunakan varietas cabai yang tahan terhadap penyakit layu fusarium jika tersedia."
        ];
      } else {
        return [
          "1. Tanaman masih sehat, tetap lakukan monitoring rutin.",
          "2. Jaga kelembaban tanah tetap ideal dan tidak terlalu basah.",
          "3. Bersihkan gulma di sekitar tanaman agar tidak menjadi inang penyakit.",
          "4. Lakukan pemupukan secara seimbang untuk meningkatkan ketahanan tanaman."
        ];
      }
    }

    async function downloadPDF(jawaban, kesimpulan) {
      const { jsPDF } = window.jspdf;
      const doc = new jsPDF();

      const tanggal = new Date().toLocaleString("id-ID");

      doc.setFontSize(16);
      doc.text("Laporan Diagnosa Layu Fusarium", 10, 15);

      doc.setFontSize(11);
      doc.text(`Tanggal Diagnosa: ${tanggal}`, 10, 23);

      doc.setFontSize(12);
      doc.text("Tabel Gejala dan Jawaban:", 10, 30);

      const headers = ["No", "Gejala", "Jawaban"];
      let body = pertanyaan.map((p, i) => [
        (i + 1).toString(),
        p.teks,
        jawaban[i] === 'ya' ? 'Ya' : 'Tidak'
      ]);

      doc.autoTable({
        startY: 35,
        head: [headers],
        body: body,
        styles: { fontSize: 10, cellWidth: 'wrap' },
        headStyles: { fillColor: [22, 160, 133] },
        margin: { top: 30 },
      });

      const yKesimpulan = doc.lastAutoTable.finalY + 10;

      doc.setFontSize(12);
      doc.text("Kesimpulan:", 10, yKesimpulan);
      doc.setFontSize(11);
      doc.text(doc.splitTextToSize(kesimpulan, 180), 10, yKesimpulan + 6);

      const saran = getSaran(kesimpulan.includes("Kemungkinan besar"));
      doc.setFontSize(12);
      doc.text("Saran Penanganan:", 10, yKesimpulan + 26);
      doc.setFontSize(11);
      doc.text(doc.splitTextToSize(saran.join("\n"), 180), 10, yKesimpulan + 32);

      doc.save("hasil_diagnosa_layu_fusarium.pdf");
    }

    tampilkanBot(pertanyaan[0].teks, pertanyaan[0].img);
  </script>

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
