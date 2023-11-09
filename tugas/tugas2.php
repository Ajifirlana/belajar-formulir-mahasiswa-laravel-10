<?php

// Abstract class
abstract class ObjekDiSekitar {
    protected $nama;
    protected $lokasi;
    protected $warna;
    protected $ukuran;
    protected $berat;
    protected $jenis;
    protected $fungsi;
    protected $status;
    protected $pemilik;

    abstract public function tampilkanInformasi();

    abstract public function gantiStatus($status);

    abstract public function hitungHarga();

    public function getNama() {
        return $this->nama;
    }

    // Concrete method di kelas abstrak
    public function setNama($nama) {
        $this->nama = $nama;
    }
}

// Kelas turunan pertama
class Mobil extends ObjekDiSekitar {
    private $merk;
    private $tahunProduksi;

    public function __construct($nama, $merk, $tahunProduksi) {
        $this->nama = $nama;
        $this->merk = $merk;
        $this->tahunProduksi = $tahunProduksi;
    }

    public function tampilkanInformasi() {
        return "Nama: {$this->nama}, Merk: {$this->merk}, Tahun Produksi: {$this->tahunProduksi}";
    }

    public function gantiStatus($status) {
        $this->status = $status;
    }

    public function hitungHarga() {
        // Logika perhitungan harga mobil
        return 20000; // Contoh harga
    }
}

// Kelas turunan kedua
class Buku extends ObjekDiSekitar {
    private $penulis;
    private $jumlahHalaman;

    public function __construct($nama, $penulis, $jumlahHalaman) {
        $this->nama = $nama;
        $this->penulis = $penulis;
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function tampilkanInformasi() {
        return "Nama: {$this->nama}, Penulis: {$this->penulis}, Jumlah Halaman: {$this->jumlahHalaman}";
    }

    public function gantiStatus($status) {
        $this->status = $status;
    }

    public function hitungHarga() {
        // Logika perhitungan harga buku
        return 25; // Contoh harga
    }
}

// Membuat dua objek dari kelas turunan
$mobil = new Mobil("Mobil A", "Toyota", 2018);
$buku = new Buku("Buku B", "Penulis X", 300);

// Menggunakan objek
echo "Informasi Mobil: " . $mobil->tampilkanInformasi() . "<br>";
echo "Harga Mobil: $" . $mobil->hitungHarga() . "<br>";
echo "Informasi Buku: " . $buku->tampilkanInformasi() . "<br>";
echo "Harga Buku: $" . $buku->hitungHarga() . "<br>";

?>
