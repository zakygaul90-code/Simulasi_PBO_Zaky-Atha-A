<?php
require_once 'Pendaftaran.php';

class PendaftaranPrestasi extends Pendaftaran {
    private $jenis_prestasi;
    private $tingkat_prestasi;

    public function __construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biaya_pendaftaran_dasar, $jenis_prestasi, $tingkat_prestasi) {
        parent::__construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biaya_pendaftaran_dasar);
        $this->jenis_prestasi = $jenis_prestasi;
        $this->tingkat_prestasi = $tingkat_prestasi;
    }

    // Tahap 5: Overriding Perhitungan Biaya Prestasi (Potongan 50.000)
    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar - 50000;
    }

    public function tampilkanInfoJalur() {
        return "Prestasi: " . $this->jenis_prestasi . " (" . $this->tingkat_prestasi . ")";
    }

    // Tahap 4: Metode Query Spesifik Jalur Prestasi
    public static function getDaftarPrestasi($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Prestasi'";
        return $db->query($query);
    }
}
?>