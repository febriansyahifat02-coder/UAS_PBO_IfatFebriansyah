<?php
// KaryawanKontrak.php
require_once 'Karyawan.php';

class KaryawanKontrak extends Karyawan {
    // Properti tambahan spesifik
    private $durasiKontrakBulan;
    private $agensiPenyalur;

    // Konstruktor kelas anak
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $durasiKontrakBulan, $agensiPenyalur) {
        // Memanggil konstruktor milik kelas induk (Karyawan)
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        $this->durasiKontrakBulan = $durasiKontrakBulan;
        $this->agensiPenyalur = $agensiPenyalur;
    }

    // Implementasi method abstrak hitungGajiBersih
    public function hitungGajiBersih() {
        // Gaji bersih kontrak = hari kerja masuk x gaji dasar per hari
        return $this->hariKerjaMasuk * $this->gajiDasarPerHari;
    }

    // Implementasi method abstrak tampilkanProfilKaryawan
    public function tampilkanProfilKaryawan() {
        echo "=== PROFIL KARYAWAN KONTRAK ===<br>";
        echo "ID Karyawan: " . $this->id_karyawan . "<br>";
        echo "Nama: " . $this->nama_karyawan . "<br>";
        echo "Departemen: " . $this->departemen . "<br>";
        echo "Status: Kontrak<br>";
        echo "Durasi Kontrak: " . $this->durasiKontrakBulan . " Bulan<br>";
        echo "Agensi Penyalur: " . $this->agensiPenyalur . "<br>";
        echo "Total Gaji Bersih: Rp " . number_format($this->hitungGajiBersih(), 2, ',', '.') . "<br><br>";
    }
}
?>