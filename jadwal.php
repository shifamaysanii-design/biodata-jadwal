<?php
$nama = "Shifa";
$hari = ["SENIN", "SELASA", "RABU", "KAMIS", "JUMAT"];

// Data Jadwal Pelajaran sesuai gambar
$jadwal_pelajaran = [
    "SENIN"  => ["MTK", "MTK", "SJR", "PABP", "PABP", "PABP", "BNG", "BNG", "BIN", "BIN"],
    "SELASA" => ["IPAS", "IPAS", "IPAS", "IPAS", "PPS", "PPS", "BJW", "BJW", "SNM", "SNM"],
    "RABU"   => ["PGD", "PGD", "PGD", "PGD", "PGD", "PGD", "GIM", "GIM", "GIM", "GIM"],
    "KAMIS"  => ["POR", "POR", "POR", "SJR", "BNG", "BNG", "MTK", "MTK", "BIN", "BIN"],
    "JUMAT"  => ["INF", "INF", "KKA", "KKA", "IPAS", "IPAS", "PGD", "PGD", "", ""]
];

// Data Jadwal Piket sesuai gambar
$piket = [
    "Senin"  => ["Cindy", "Nata", "Tsabita", "Naila", "Kartika", "Rasya", "Yusuf", "Habibi"],
    "Selasa" => ["Keisha", "Shafanira", "Aurora", "Sila", "Syauqi", "Nail", "Wahyu"],
    "Rabu"   => ["Anin", "Shifa", "Tania", "Fasya", "Eka", "Dzaky", "Vino"],
    "Kamis"  => ["Aida", "Maharani", "Alya", "Denia", "Ravid", "Ibnu", "Tegar"],
    "Jumat"  => ["Aqila", "Alais", "Gendhis", "Cloudya", "Aziz", "Raka", "Rahyan"]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jadwal <?php echo $nama; ?></title>
    <style>
        :root {
            --t-main: #26a69a;
            --t-light: #e0f2f1;
            --t-dark: #00695c;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f1f8f7;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            max-width: 1000px;
            width: 100%;
            background: white;
            padding: 30px;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        h2 {
            color: var(--t-dark);
            text-align: center;
            margin-bottom: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 40px;
            border: 1px solid var(--t-light);
        }

        th {
            background: var(--t-main);
            color: white;
            padding: 12px;
            font-size: 13px;
            text-transform: uppercase;
        }

        td {
            border: 1px solid var(--t-light);
            padding: 10px;
            text-align: center;
            font-size: 12px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }

        li {
            padding: 3px 8px;
            border-radius: 5px;
        }

        .highlight {
            background: #b2dfdb;
            font-weight: bold;
            color: var(--t-dark);
            border: 1px dashed var(--t-dark);
        }

        .btn-back {
            text-decoration: none;
            background: var(--t-main);
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: bold;
            transition: 0.3s;
            display: inline-block;
            margin-bottom: 20px;
        }
        .btn-back:hover { 
            background: var(--t-dark); 
            box-shadow: 0 5px 15px rgba(0, 105, 92, 0.3);
        }
    </style>
</head>
<body>

<a href="biodata.php" class="btn-back"><i class="fa fa-arrow-left"></i> Kembali ke Profil</a>

<div class="container">
    <h2><i class="fa fa-book"></i> Jadwal Pelajaran X PPLG 2</h2>
    <table>
        <tr>
            <th>Hari</th>
            <?php for($i=1;$i<=10;$i++) echo "<th>Jam $i</th>"; ?>
        </tr>
        <?php foreach($jadwal_pelajaran as $h => $mapels){
            echo "<tr><td><b>$h</b></td>";
            foreach($mapels as $m) {
                echo "<td>" . ($m ? $m : "-") . "</td>";
            }
            echo "</tr>";
        } ?>
    </table>

    <h2><i class="fa fa-broom"></i> Jadwal Piket</h2>
    <table>
        <tr>
            <th style="background: var(--t-dark);">Senin</th>
            <th style="background: var(--t-dark);">Selasa</th>
            <th style="background: var(--t-dark);">Rabu</th>
            <th style="background: var(--t-dark);">Kamis</th>
            <th style="background: var(--t-dark);">Jumat</th>
        </tr>
        <tr>
            <?php foreach($piket as $hari_piket => $daftar_nama): ?>
                <td>
                    <ul>
                        <?php foreach($daftar_nama as $p): ?>
                            <li class="<?php echo ($p == 'Shifa') ? 'highlight' : ''; ?>">
                                <?php echo $p; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </td>
            <?php endforeach; ?>
        </tr>
    </table>
</div>

</body>
</html>