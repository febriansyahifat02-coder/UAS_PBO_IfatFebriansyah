<?php
require_once 'Karyawan.php';

class KaryawanMagang extends Karyawan {
    private $uangSakuBulanan; // Tetap dipertahankan sebagai atribut objek objek magang
    private $sertifikatKampusMerdeka;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $uangSakuBulanan, $sertifikatKampusMerdeka) {
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        $this->uangSakuBulanan = $uangSakuBulanan;
        $this->sertifikatKampusMerdeka = $sertifikatKampusMerdeka;
    }

    // METHOD OVERRIDING
    public function hitungGajiBersih() {
        // Mendapat potongan upah 20% (dikali 0.80)
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari) * 0.80;
    }

    public function tampilkanProfilKaryawan() {
        echo "=== PROFIL KARYAWAN MAGANG ===<br>";
        echo "ID Karyawan: " . $this->id_karyawan . "<br>";
        echo "Nama: " . $this->nama_karyawan . "<br>";
        echo "Departemen: " . $this->departemen . "<br>";
        echo "Status: Magang (Program: " . $this->sertifikatKampusMerdeka . ")<br>";
        echo "Total Gaji Bersih (Setelah Potongan Orientasi 20%): Rp " . number_format($this->hitungGajiBersih(), 2, ',', '.') . "<br><br>";
    }
}
?>