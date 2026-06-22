<?php
require_once 'Karyawan.php';

class KaryawanKontrak extends Karyawan {
    private $durasiKontrakBulan;
    private $agensiPenyalur;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $durasiKontrakBulan, $agensiPenyalur) {
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        $this->durasiKontrakBulan = $durasiKontrakBulan;
        $this->agensiPenyalur = $agensiPenyalur;
    }

    // METHOD OVERRIDING
    public function hitungGajiBersih() {
        return $this->hariKerjaMasuk * $this->gajiDasarPerHari;
    }

    public function tampilkanProfilKaryawan() {
        echo "=== PROFIL KARYAWAN KONTRAK ===<br>";
        echo "ID Karyawan: " . $this->id_karyawan . "<br>";
        echo "Nama: " . $this->nama_karyawan . "<br>";
        echo "Departemen: " . $this->departemen . "<br>";
        echo "Status: Kontrak (Agensi: " . $this->agensiPenyalur . ")<br>";
        echo "Durasi Kontrak: " . $this->durasiKontrakBulan . " Bulan<br>";
        echo "Total Gaji Bersih: Rp " . number_format($this->hitungGajiBersih(), 2, ',', '.') . "<br><br>";
    }
}
?>