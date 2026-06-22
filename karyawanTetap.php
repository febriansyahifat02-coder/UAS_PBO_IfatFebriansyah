<?php
// KaryawanTetap.php
require_once 'Karyawan.php';

class KaryawanTetap extends Karyawan {
    // Properti tambahan spesifik
    private $tunjanganKesehatan;
    private $opsiSahamId;

    // Konstruktor kelas anak
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $tunjanganKesehatan, $opsiSahamId) {
        // Memanggil konstruktor milik kelas induk (Karyawan)
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        $this->tunjanganKesehatan = $tunjanganKesehatan;
        $this->opsiSahamId = $opsiSahamId;
    }

    // Implementasi method abstrak hitungGajiBersih
    public function hitungGajiBersih() {
        // Gaji bersih tetap = (hari kerja masuk x gaji dasar per hari) + tunjangan kesehatan
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari) + $this->tunjanganKesehatan;
    }

    // Implementasi method abstrak tampilkanProfilKaryawan
    public function tampilkanProfilKaryawan() {
        echo "=== PROFIL KARYAWAN TETAP ===<br>";
        echo "ID Karyawan: " . $this->id_karyawan . "<br>";
        echo "Nama: " . $this->nama_karyawan . "<br>";
        echo "Departemen: " . $this->departemen . "<br>";
        echo "Status: Tetap<br>";
        echo "Opsi Saham ID: " . $this->opsiSahamId . "<br>";
        echo "Tunjangan Kesehatan: Rp " . number_format($this->tunjanganKesehatan, 2, ',', '.') . "<br>";
        echo "Total Gaji Bersih: Rp " . number_format($this->hitungGajiBersih(), 2, ',', '.') . "<br><br>";
    }
}
?>