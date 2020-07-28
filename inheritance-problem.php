<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jumlahHalaman,
        $waktuMain,
        $tipe;

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jumlahHalaman = 0,
        $waktuMain = 0,
        $tipe
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLable()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLable()} (Rp. {$this->harga})";

        if ($this->tipe == "Komik") {
            $str .= " - {$this->jumlahHalaman} halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} jam.";
        }

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

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 20000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "\n";
echo $produk2->getInfoLengkap();
