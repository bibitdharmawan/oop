<?php class Karyawan {
    private $nama;
    private $jabatan;
    private $absen;
    private $targetPenjualan;
    private $partisipasiEvent;

    public function __construct($nama, $jabatan, $absen, $targetPenjualan, $partisipasiEvent) {
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->absen = $absen;
        $this->targetPenjualan = $targetPenjualan;
        $this->partisipasiEvent = $partisipasiEvent;
    }

    public function hitungKPI() {
        $kpiAbsen = 0;
        if ($this->absen == 0) {
            $kpiAbsen = 10;
        } elseif ($this->absen < 5) {
            $kpiAbsen = 5;
        } else {
            $kpiAbsen = 2;
        }

        $kpiPenjualan = $this->targetPenjualan * 0.45;
        $kpiEvent = $this->partisipasiEvent * 0.16;

        $totalKPI = ($kpiAbsen * 0.39) + ($kpiPenjualan * 0.45) + ($kpiEvent * 0.16);
        return $totalKPI;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getJabatan() {
        return $this->jabatan;
    }
}

// Contoh penggunaan program

// Buat objek karyawan
$karyawan = new Karyawan("Budi", "SPV", 5, 50, 10);

// Hitung KPI karyawan
$kpi = $karyawan->hitungKPI();

// Tampilkan hasil
echo "KPI Karyawan " . $karyawan->getNama() . " (Jabatan: " . $karyawan->getJabatan() . "): " . $kpi;
