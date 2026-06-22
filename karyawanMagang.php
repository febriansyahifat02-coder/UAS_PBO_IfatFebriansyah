<?php
// KaryawanMagang.php
require_once 'Karyawan.php';

class KaryawanMagang extends Karyawan {
    // Properti tambahan spesifik
    private $uangSakuBulanan;
    private $sertifikatKampusMerdeka;

    // Konstruktor kelas anak
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $uangSakuBulanan, $sertifikatKampusMerdeka) {
        // Memanggil konstruktor milik kelas induk (Karyawan)
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        $this->uangSakuBulanan = $uangSakuBulanan;
        $this->sertifikatKampusMerdeka = $sertifikatKampusMerdeka;
    }

    // Implementasi method abstrak hitungGajiBersih
    public function hitungGajiBersih() {
        // Gaji bersih magang = (hari kerja masuk x gaji dasar per hari) + uang saku bulanan tetap
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari) + $this->uangSakuBulanan;
    }

    // Implementasi method abstrak tampilkanProfilKaryawan
    public function tampilkanProfilKaryawan() {
        echo "=== PROFIL KARYAWAN MAGANG ===<br>";
        echo "ID Karyawan: " . $this->id_karyawan . "<br>";
        echo "Nama: " . $this->nama_karyawan . "<br>";
        echo "Departemen: " . $this->departemen . "<br>";
        echo "Status: Magang<br>";
        echo "Sertifikat Kampus Merdeka: " . $this->sertifikatKampusMerdeka . "<br>";
        echo "Uang Saku Bulanan: Rp " . number_format($this->uangSakuBulanan, 2, ',', '.') . "<br>";
        echo "Total Gaji Bersih: Rp " . number_format($this->hitungGajiBersih(), 2, ',', '.') . "<br><br>";
    }
}
?>