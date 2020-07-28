<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jumlahHalaman,
        $waktuMain;

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jumlahHalaman = 0,
        $waktuMain = 0
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLable()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLable()} (Rp. {$this->harga}) - {$this->jumlahHalaman} halaman.";

        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLable()} (Rp. {$this->harga}) ~ {$this->waktuMain} jam.";

        return $str;
    }
}

class cetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLable()} | (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 20000, 0, 50);

echo $produk1->getInfoProduk();
echo "\n";
echo $produk2->getInfoProduk();
