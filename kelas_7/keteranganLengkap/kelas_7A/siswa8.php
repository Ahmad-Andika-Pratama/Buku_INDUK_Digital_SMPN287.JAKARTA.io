<?php
require "../../../fungsi/fungsi.php";

$data_siswa1 = query("SELECT * FROM data_besar_7a WHERE Nama = 'BAYU PRASETYO'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>keterangan lengkap</title>
 <!-- css -->
 <link rel="stylesheet" href="../style.css">
 <!-- aos -->
 <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>
 <nav>
  <div>
   <a href="../../7A.php"><i data-feather="x"></i></a>
  </div>
 </nav>
 <div class="container">
  <?php foreach ($data_siswa1 as $row): ?>
   <h1 class="judul">Data <?= $row["Nama"] ?></h1>
   <img src="../../foto siswa/contoh.jpg" alt="">
   <p>nama: <?= $row["Nama"] ?></p>
   <p>Jenis Kelamin: <?= $row["Jenis Kelamin"] ?></p>
   <p>Agama: <?= $row["Agama"] ?></p>
   <p>Kelas: <?= $row["Kelas"] ?></p>
   <p>NISN: <?= $row["NISN"] ?></p>
   <p>Tanggal Lahir: <?= $row["Tanggal Lahir"] ?></p>
   <p>Alamat: <?= $row["Alamat"] ?></p>
   <div class="pendidikan_sebelumnya">
    <h1>pendidikan Sebelumnya:<h1>
      <p>Lulus Dari:<?= $row["Lulus dari"] ?> </p>
      <p>Tanggal dan No STTB:<?= $row["Tanggal & No STTB"] ?></p>
      <p>Lama Belajar:<?= $row["Lama Belajar"] ?></p>
   </div>
   <div class="pindahan">
    <h1>Pindahan:</h1>
    <p>Dari Sekolah: <?= $row["Dari Sekolah"] ?></p>
    <p>Alasan: <?= $row["Alasan"] ?></p>
   </div>
   <div class="diterima_disekolah">
    <h1>Diterima di Sekolah ini:<h1>
      <p>Kelompok: <?= $row["Kelompok"] ?></p>
      <p>Jurusan: <?= $row["Jurusan"] ?></p>
      <p>Tanggal: <?= $row["Tanggal"] ?></p>
   </div>
  <?php endforeach; ?>
 </div>
 <!-- aos -->
 <script>
  feather.replace();
 </script>
</body>

</html>