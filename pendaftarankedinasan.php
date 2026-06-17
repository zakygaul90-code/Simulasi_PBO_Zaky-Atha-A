<?php
require_once 'Pendaftaran.php';

class PendaftaranKedinasan extends Pendaftaran {
    private $sk_ikatan_dinas;
    private $instansi_sponsor;

    public function __construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biaya_pendaftaran_dasar, $sk_ikatan_dinas, $instansi_sponsor) {
        parent::__construct($id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biaya_pendaftaran_dasar);
        $this->sk_ikatan_dinas = $sk_ikatan_dinas;
        $this->instansi_sponsor = $instansi_sponsor;
    }

    // Tahap 5: Overriding Perhitungan Biaya Kedinasan (Surcharge 25%)
    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar * 1.25;
    }

    public function tampilkanInfoJalur() {
        return "Sponsor: " . $this->instansi_sponsor . " | SK: " . $this->sk_ikatan_dinas;
    }

    // Tahap 4: Metode Query Spesifik Jalur Kedinasan
    public static function getDaftarKedinasan($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Kedinasan'";
        return $db->query($query);
    }
}
?>