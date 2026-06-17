<?php
require_once 'Pendaftaran.php';

class PendaftaranReguler extends Pendaftaran {
    private $pilihan_prodi;
    private $lokasi_kampus;

    public function __construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biaya_pendaftaran_dasar, $pilihan_prodi, $lokasi_kampus) {
        parent::__construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biaya_pendaftaran_dasar);
        $this->pilihan_prodi = $pilihan_prodi;
        $this->lokasi_kampus = $lokasi_kampus;
    }

    // Tahap 5: Overriding Perhitungan Biaya Reguler
    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar;
    }

    public function tampilkanInfoJalur() {
        return "Prodi: " . $this->pilihan_prodi . " | Kampus: " . $this->lokasi_kampus;
    }

    // Tahap 4: Metode Query Spesifik Jalur Reguler
    public static function getDaftarReguler($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Reguler'";
        return $db->query($query);
    }
}
?>