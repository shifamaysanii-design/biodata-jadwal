<?php
// =====================
// VARIABEL PHP
// =====================
$nama_lengkap = "Shifa Rahma Maysani";
$nama_panggilan = "sifaa";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tanggal_lahir = 11;
$bulan_lahir = "Mei";
$tahun_lahir = 2009;
$alamat = "Jl. Candi Pawon Selatan XIV, Rt. 04 Rw. 01, Kalipancur, Semarang";
$hobi = ["Mendengarkan Musik", "Traveling", "Menonton Film (drakor)"];
$skills = [
    "HTML" => 90,
    "PHP" => 80,
    "CSS" => 85];
$gender = "Perempuan";
$kewarganegaraan = "Indonesia";
$no_wa = "085728460900";
$email = "shifa.maysanii@email.com";
$makanan_favorit = ["Ayam Geprek", "Mie Ayam"];
$minuman_favorit = ["Coffee", "Matcha"];
$motto = "today to dreamer, tomorrow to winner";

// PERHITUNGAN UMUR
$tahun_sekarang = date("Y");
$umur = $tahun_sekarang - $tahun_lahir;
$tahun_10_lagi = $tahun_sekarang + 10;
$umur_10_lagi = $umur + 10;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata <?php echo $nama_lengkap; ?></title>
    <style>
        :root {
            /* TEMA WARNA TOSCA */
            --main-tosca: #26a69a;
            --light-tosca: #e0f2f1;
            --dark-tosca: #00796b;
            --bg-color: #f1f8f7;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--bg-color);
            padding: 40px 20px;
            color: #444;
            display: flex;
            justify-content: center;
        }

        .card {
            max-width: 700px;
            width: 100%;
            background: white;
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0 15px 35px rgba(38, 166, 154, 0.15);
            border: 1px solid var(--light-tosca);
        }

        h2 {
            color: var(--dark-tosca);
            border-bottom: 2px solid var(--light-tosca);
            padding-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 28px;
        }

        h3 {
            color: var(--main-tosca);
            margin-top: 30px;
            font-size: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 50%;
            border: 6px solid var(--light-tosca);
            display: block;
            margin: 0 auto 25px auto;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        img:hover {
            transform: scale(1.1) rotate(5deg);
        }

        .info-text {
            line-height: 1.8;
            margin: 10px 0;
        }

        .skill-container { margin-bottom: 15px; }
        .skill-label { display: flex; justify-content: space-between; margin-bottom: 5px; font-weight: bold; font-size: 14px; }
        .skill-bar {
            width: 100%;
            background: #eee;
            border-radius: 20px;
            height: 12px;
            overflow: hidden;
        }
        .skill-fill {
            background: linear-gradient(90deg, var(--main-tosca), var(--dark-tosca));
            height: 100%;
            border-radius: 20px;
            transition: width 1s ease-in-out;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            border-radius: 15px;
            overflow: hidden;
            border: 1px solid var(--light-tosca);
        }
        th {
            background: var(--main-tosca);
            color: white;
            padding: 15px;
            font-size: 14px;
        }
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid var(--light-tosca);
        }
        tr:last-child td { border-bottom: none; }
        tr:nth-child(even) { background-color: var(--bg-color); }

        .motto-box {
            background: var(--light-tosca);
            padding: 15px;
            border-radius: 50px;
            margin-top: 30px;
            text-align: center;
        }
        
        marquee {
            color: var(--dark-tosca);
            font-weight: bold;
            font-style: italic;
        }

        .btn-link {
            display: inline-block;
            text-decoration: none;
            background: var(--main-tosca);
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            transition: 0.3s;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }
        .btn-link:hover {
            background: var(--dark-tosca);
            box-shadow: 0 5px 15px rgba(0, 121, 107, 0.4);
        }
    </style>
</head>
<body>

<div class="card">
    <h2><i class="fa fa-user-circle"></i> Biodata Sy</h2>

    <img src="shifa.jpg" alt="Foto Profil">

    <div class="info-text">
        <p><b><i class="fa fa-id-card"></i> Nama Lengkap:</b> <?php echo $nama_lengkap; ?></p>
        <p><b><i class="fa fa-comment"></i> Nama Panggilan:</b> <?php echo $nama_panggilan; ?></p>
        <p><b><i class="fa fa-kaaba"></i> Agama:</b> <?php echo $agama; ?></p>
        <p><b><i class="fa fa-map-marker-alt"></i> TTL:</b> <?php echo "$tempat_lahir, $tanggal_lahir $bulan_lahir $tahun_lahir"; ?></p>
        <p><b><i class="fa fa-birthday-cake"></i> Umur:</b> <?php echo $umur; ?> Tahun</p>
        <p><b><i class="fa fa-venus"></i> Gender:</b> <?php echo $gender; ?></p>
    </div>

    <h3><i class="fa fa-star"></i> Skills & Keahlian</h3>
    <?php foreach($skills as $nama => $nilai){ ?>
        <div class="skill-container">
            <div class="skill-label">
                <span><?php echo $nama; ?></span>
                <span><?php echo $nilai; ?>%</span>
            </div>
            <div class="skill-bar">
                <div class="skill-fill" style="width: <?php echo $nilai; ?>%;"></div>
            </div>
        </div>
    <?php } ?>

 <h3><i class="fa fa-graduation-cap"></i> Riwayat Pendidikan</h3>
    <table>
        <tr>
            <th>Tingkat</th>
            <th>Nama Sekolah</th>
            <th>Tahun</th>
        </tr>
        <tr><td>SD</td><td>SDN Kalipancur 02</td><td>2016 - 2022</td></tr>
        <tr><td>SMP</td><td>SMPN 13 Semarang</td><td>2022 - 2025</td></tr>
        <tr><td>SMK</td><td>SMKN 8 Semarang</td><td>2025 - 2028</td></tr>

    </table>

    

    <h3><i class="fa fa-rocket"></i> Harapan 10 Tahun Lagi</h3>
    <p style="text-align: justify; line-height: 1.6;">
        Hai namaku <b><?php echo $nama_panggilan; ?></b>, saat ini tahun <?php echo $tahun_sekarang; ?>, 
        aku adalah seorang pelajar berumur <?php echo $umur; ?> tahun. 10 tahun lagi di tahun <?php echo $tahun_10_lagi; ?>, 
        aku bermimpi menjadi pengusaha sukses lulusan universitas impianku sejak smp, yaitu lulus FISIP (Fakultas Ilmu Sosial dan Ilmu Politik) di Universitas Padjadjaran. Untuk memulai semuanya dari sekarang, rencanaku adalah terus belajar dengan giat, mengasah kemampuan di bidang bisnis, dan membangun jaringan yang kuat. Aku percaya bahwa dengan kerja keras, tekad, dan sedikit keberuntungan, aku bisa mencapai semua impianku. Semoga 10 tahun lagi aku bisa melihat kembali perjalanan hidupku dengan bangga dan bahagia atas semua pencapaian yang telah diraih.
    </p>

   <div style="text-align: center;">
        <a href="jadwal.php" class="btn-link"><i class="fa fa-calendar-alt"></i> Lihat Jadwal Pelajaran</a>
    </div>

    <div class="motto-box">
        <marquee scrollamount="5"><?php echo $motto; ?></marquee>
    </div>
</div>

</body>
</html>