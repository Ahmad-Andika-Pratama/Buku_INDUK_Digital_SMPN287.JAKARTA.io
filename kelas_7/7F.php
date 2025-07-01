<?php
require "../fungsi/fungsi.php";

$data_kelas_7a = query("SELECT Nama,Kelas,NISN,Jenis_Kelamin,See_More FROM data_besar_7f");
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>E-Book 287</title>
 <!--! css -->
 <link rel="stylesheet" href="../desain/index.css">
 <link rel="stylesheet" href="../desain/kelas.css" />
 <!--! feather icons -->
 <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
 <!--? ini NAVBAR -->
 <nav class="nav">
  <img src="../gambar/logo.png" alt="" />
  <h1>Buku INDUK digital <span>SMPN 287</span></h1>
  <div id="pilih_kelas">
   <h1>
    Pilih Kelas
    <i id="arrowB" class="b hidden-element" data-feather="arrow-right-circle"></i>
    <i id="arrowA" class="a visible-element" data-feather="arrow-left-circle"></i>
   </h1>
   <div class="home">
    <a href="../navbar.html">HOME</a>
   </div>
   <div class="kelas_7">
    <a href="">VII-A</a>
    <a href="7B.php">VII-B</a>
    <a href="7C.php">VII-C</a>
    <a href="7D.php">VII-D</a>
    <a href="7E.php">VII-E</a>
    <a href="">VII-F</a>
   </div>
   <div class="kelas_8">
    <a href="">VIII-A</a>
    <a href="">VIII-B</a>
    <a href="">VIII-C</a>
    <a href="">VIII-D</a>
    <a href="">VIII-E</a>
    <a href="">VIII-F</a>
    <a href="">VIII-G</a>
   </div>
   <div class="kelas_9">
    <a href="">IX-A</a>
    <a href="">IX-B</a>
    <a href="">IX-C</a>
    <a href="">IX-D</a>
    <a href="">IX-E</a>
    <a href="">IX-F</a>
    <a href="">IX-G</a>
   </div>
  </div>

 </nav>

 <!-- tabel data siswa kelas 7A -->
 <table>
  <caption>data siswa kelas VII-A tahun pelajaran 2024/2025</caption>
  <thead>
   <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>NISN</th>
    <th>Jenis Kelamin</th>
    <th>see more</th>
   </tr>
  </thead>

  <?php $i = 1;
  foreach ($data_kelas_7a as $row): ?>
   <tbody>
    <tr>
     <td><?= $i++; ?></td>
     <td><?= $row["Nama"] ?></td>
     <td><?= $row["Kelas"] ?></td>
     <td><?= $row["NISN"] ?></td>
     <td><?= $row["Jenis_Kelamin"] ?></td>
     <td><a href="keteranganLengkap/kelas_7A/<?= $row["See_More"]; ?>.php">see more</a></td>
    </tr>
   </tbody>

  <?php endforeach; ?>
 </table>


 <!--! gsap -->
 <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/TextPlugin.min.js"></script>
 <script>
  gsap.from( ".nav", { duration: 1.5, y: -100, opacity: 0, ease: "bounce" } );
 </script>
 <!--! feather icons -->
 <script>
  feather.replace();
 </script>
 <!--! javascript -->
 <script src="../javascript/index.js"></script>
</body>

</html>