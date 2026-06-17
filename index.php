<?php
require_once 'database.php';
require_once 'pendaftaranreguler.php';
require_once 'pendaftaranprestasi.php';
require_once 'pendaftarankedinasan.php';

// Inisialisasi Database
$database = new Database();
$db = $database->getConnection();

// Memanfaatkan metode query spesifik dari Tahap 4
$dataReguler = PendaftaranReguler::getDaftarReguler($db);
$dataPrestasi = PendaftaranPrestasi::getDaftarPrestasi($db);
$dataKedinasan = PendaftaranKedinasan::getDaftarKedinasan($db);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Manajemen PMB Jalur Spesifik</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 30px; background-color: #f5f6fa; color: #333; }
        h1 { text-align: center; color: #2c3e50; margin-bottom: 30px; }
        h2 { background-color: #2c3e50; color: white; padding: 10px; border-radius: 4px; font-size: 1.2rem; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 40px; background: #fff; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-radius: 4px; overflow: hidden; }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #dee2e6; }
        th { background-color: #34495e; color: white; text-transform: uppercase; font-size: 0.85rem; }
        tr:hover { background-color: #4f6fef; }
        .text-right { text-align: right; }
        .badge-total { background-color: #2eda76; color: white; padding: 5px 10px; border-radius: 4px; font-weight: bold; }
    </style>
</head>
<body>

    <h1>Sistem Pendaftaran Mahasiswa Baru (PMB)</h1>

    <h2>[Jalur] Pendaftaran Reguler</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Biaya Dasar</th>
                <th>Atribut Unik Jalur</th>
                <th class="text-right">Total Biaya Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $dataReguler->fetch_assoc()): 
                $mhs = new PendaftaranReguler(
                    $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                    $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], 
                    $row['pilihan_prodi'], $row['lokasi_kampus']
                );
            ?>
                <tr>
                    <td><?= $mhs->getIdPendaftaran() ?></td>
                    <td><?= $mhs->getNamaCalon() ?></td>
                    <td><?= $mhs->getAsalSekolah() ?></td>
                    <td><?= $mhs->getNilaiUjian() ?></td>
                    <td>Rp <?= number_format($mhs->getBiayaDasar(), 0, ',', '.') ?></td>
                    <td><?= $mhs->tampilkanInfoJalur() ?></td>
                    <td class="text-right"><span class="badge-total">Rp <?= number_format($mhs->hitungTotalBiaya(), 0, ',', '.') ?></span></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <h2>[Jalur] Pendaftaran Prestasi</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Biaya Dasar</th>
                <th>Atribut Unik Jalur</th>
                <th class="text-right">Total Biaya Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $dataPrestasi->fetch_assoc()): 
                $mhs = new PendaftaranPrestasi(
                    $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                    $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], 
                    $row['jenis_prestasi'], $row['tingkat_prestasi']
                );
            ?>
                <tr>
                    <td><?= $mhs->getIdPendaftaran() ?></td>
                    <td><?= $mhs->getNamaCalon() ?></td>
                    <td><?= $mhs->getAsalSekolah() ?></td>
                    <td><?= $mhs->getNilaiUjian() ?></td>
                    <td>Rp <?= number_format($mhs->getBiayaDasar(), 0, ',', '.') ?></td>
                    <td><?= $mhs->tampilkanInfoJalur() ?></td>
                    <td class="text-right"><span class="badge-total">Rp <?= number_format($mhs->hitungTotalBiaya(), 0, ',', '.') ?></span></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <h2>[Jalur] Pendaftaran Kedinasan</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Nilai Ujian</th>
                <th>Biaya Dasar</th>
                <th>Atribut Unik Jalur</th>
                <th class="text-right">Total Biaya Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $dataKedinasan->fetch_assoc()): 
                $mhs = new PendaftaranKedinasan(
                    $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                    $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], 
                    $row['sk_ikatan_dinas'], $row['instansi_sponsor']
                );
            ?>
                <tr>
                    <td><?= $mhs->getIdPendaftaran() ?></td>
                    <td><?= $mhs->getNamaCalon() ?></td>
                    <td><?= $mhs->getAsalSekolah() ?></td>
                    <td><?= $mhs->getNilaiUjian() ?></td>
                    <td>Rp <?= number_format($mhs->getBiayaDasar(), 0, ',', '.') ?></td>
                    <td><?= $mhs->tampilkanInfoJalur() ?></td>
                    <td class="text-right"><span class="badge-total">Rp <?= number_format($mhs->hitungTotalBiaya(), 0, ',', '.') ?></span></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>