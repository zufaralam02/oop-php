<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit;

    protected $diskon = 0;

    // protected $harga;
    private $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // public function setDiskon($diskon)
    // {
    //     $this->diskon = $diskon;
    // }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
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
    public $jumlahHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jumlahHalaman} halaman.";

        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    // public function getHarga()
    // {
    //     return $this->harga;
    // }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} jam.";

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

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "\n";
echo $produk2->getInfoProduk();
echo "\n";
echo "\n";

$produk2->setDiskon(50);
echo $produk2->getHarga();
