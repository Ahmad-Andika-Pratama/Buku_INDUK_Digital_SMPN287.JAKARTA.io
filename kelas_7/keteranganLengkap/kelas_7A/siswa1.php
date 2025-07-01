<?php
require "../../../fungsi/fungsi.php";

$data = query("SELECT * FROM data_besar_7a WHERE Nama = 'ADHYA PURI PRAMUFTISYA'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>keterangan lengkap</title>
  <!-- css -->
  <link rel="stylesheet" href="../style.css">
  <!-- feather icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
  <nav>
    <div>
      <a href="../../7A.php"><i data-feather="x"></i></a>
    </div>
  </nav>

  <?php foreach ($data as $row): ?>
    <div class="container">
      <div class="foto">
        <img src="../../foto siswa/contoh.jpg" alt="">
        <h1><?= $row["Nama"] ?></h1>
      </div>
      <div class="keterangan">
        <h1 class="data">Data Siswa</h1>
        <p>Nama: <?= $row["Nama"] ?></p>
        <p>Jenis Kelamin: <?= $row["Jenis_Kelamin"] ?></p>
        <p>Agama: <?= $row["Agama"] ?></p>
        <p>NISN: <?= $row["NISN"] ?></p>
        <p>NIS: <?= $row["NIS"] ?></p>
        <p>Tempat/Tanggal Lahir: <?= $row["Tanggal_Lahir"] ?></p>
        <p>Alamat: <?= $row["Alamat"] ?></p>
        <h1 class="pendidikan_sebelumnya">Pendidikan Sebelumnya: <p>Lulus Dari: <?= $row["Lulus_Dari"] ?></p>
          <p>Tanggal & No STTB: <?= $row["Tanggal_&_No_STTB"] ?></p>
        </h1>
        <h1 class="pindahan">Pindahan: <p>Dari Sekolah: <?= $row["Dari_Sekolah"] ?></p>
          <p>Alasan: <?= $row["Alasan"] ?></p>
        </h1>
        <h1 class="diterima_disekolah">Diterima Di Sekolah Ini: <p>Kelas: <?= $row["Kelas"] ?></p>
          <p>Tanggal: <?= $row["Tanggal"] ?></p>
        </h1>
      </div>
    </div>
  <?php endforeach; ?>

  <div class="scroll">
    <i data-feather="arrow-down"></i>
  </div>

  <!-- nilai UJIAN AWAL SEMESTER -->
  <table class="vertical-table">
    <caption>Pengetahuan dan Keterampilan <span>Semester Ganjil</span></caption>
    <thead>
      <tr>
        <th>MAPEL</th>
        <td>NILAI</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Pendidikan Agama Islam</th>
        <td></td>
      </tr>
      <tr>
        <th>Pendidikan Pancasila</th>
        <td></td>
      </tr>
      <tr>
        <th>Bahasa Indonesia</th>
        <td></td>
      </tr>
      <tr>
        <th>Matematika</th>
        <td></td>
      </tr>
      <tr>
        <th>Ilmu Pengetahuan Alam</th>
        <td></td>
      </tr>
      <tr>
        <th>Ilmu Pengetahuan Sosial</th>
        <td></td>
      </tr>
      <tr>
        <th>Bahasa Inggris</th>
        <td></td>
      </tr>
      <tr>
        <th>Pendidikan Jasmani Olahraga Dan Kesehatan</th>
        <td></td>
      </tr>
      <tr>
        <th>Teknologi Informasi Dan Komunikasi</th>
        <td></td>
      </tr>
      <tr>
        <th class="aos">Seni Budaya Dan Keterampilan</th>
        <td></td>
      </tr>
    </tbody>
  </table>

  <table class="nilai_rata-rata">
    <tr>
      <th>nilai rata-rata:</th>
      <td></td>
    </tr>
  </table>

  <!-- nilai UJIAN TENGAH SEMESTER -->
  <table class="vertical-table2">
    <caption>Pengetahuan dan Keterampilan <span>Semester Genap</span></caption>
    <thead>
      <tr>
        <th>MAPEL</th>
        <td>NILAI</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Pendidkan Agama Islam</th>
        <td></td>
      </tr>
      <tr>
        <th>Pendidikan Pancasila</th>
        <td></td>
      </tr>
      <tr>
        <th>Bahasa Indonesia</th>
        <td></td>
      </tr>
      <tr>
        <th>Matematika</th>
        <td></td>
      </tr>
      <tr>
        <th>Ilmu Pengetahuan Alam</th>
        <td></td>
      </tr>
      <tr>
        <th>Ilmu Pengetahuan Sosial</th>
        <td></td>
      </tr>
      <tr>
        <th>Bahasa Inggris</th>
        <td></td>
      </tr>
      <tr>
        <th>Pendidikan Jasmani Olahraga Dan Kesehatan</th>
        <td></td>
      </tr>
      <tr>
        <th>Teknologi Informasi Dan Komunikasi</th>
        <td></td>
      </tr>
      <tr>
        <th>Seni Budaya Dan Keterampilan</th>
        <td></td>
      </tr>
    </tbody>
  </table>

  <table class="nilai_rata-rata">
    <tr>
      <th>nilai rata-rata:</th>
      <td></td>
    </tr>
  </table>



  <!-- footer 1 -->
  <footer class="footer1">
    <div class="div1">
      <p class="kata">
        "Belajar kemarin, hidup hari ini, berharap untuk besok. Yang penting adalah tidak berhenti bertanya."
      <p class="pencipta">~ Albert Einstein</p>
      </p>
    </div>
    <div class="div2">
      <p class="p1">Setiap Pertanyaan Membuka Pintu Penemuan Baru</p>
      <p class="p2">&copy; 2025 <span>SMPN 287 JAKARTA</span>.</p>
    </div>
  </footer>
  <!-- footer 2 -->
  <footer class="footer2">
    <div class="div1">
      <p class="kata">
        "Tidak ada ketenangan bagi saya kecuali di medan ilmu."
      <p class="pencipta">~ Khalid bin Walid (adaptasi)</p>
      </p>
    </div>
    <div class="div2">
      <p class="p1">Teruslah berjuang dengan semangat pahlawan, karena setiap ilmu adalah medan pertempuranmu menuju
        kesuksesan!</p>
      <p class="p2">&copy; 2025 <span>SMPN 287 JAKARTA</span>. Jadilah Juara Belajar.</p>
    </div>
  </footer>

  <!-- gsap -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
  <script>
    gsap.from( ".container .foto", {
      duration: 2,
      rotateY: 360,
      opacity: 0,
    } );
    gsap.from( ".container .keterangan", { duration: 1.5, y: -100, opacity: 0, ease: "bounce", delay: .5 } );

  </script>
  <!-- feather icons -->
  <script>
    feather.replace();
  </script>
  <!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    let aos = document.querySelectorAll( "th" );
    aos.forEach( ( th, i ) =>
    {
      th.dataset.aos = "fade-down";
      th.dataset.aosDelay = i * 10;
    } );
    let aos2 = document.querySelectorAll( "td" );
    aos2.forEach( ( th, i ) =>
    {
      th.dataset.aos = "fade-down";
      th.dataset.aosDelay = i * 20;
    } );

    AOS.init( {
      once: true,
      duration: 1000,
    } );
  </script>
  <!-- tilt js -->
  <script type="text/javascript" src="../../../vanilla-tilt.min.js"></script>
  <script>
    VanillaTilt.init( document.querySelector( ".foto" ), {
      max: 25,
      speed: 400
    } );
  </script>
</body>

</html>