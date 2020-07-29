<?php

class CetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "Daftar Produk : \n";

        foreach ($this->daftarProduk as $d) {
            $str .= "- {$d->getInfoProduk()} \n";
        }

        return $str;
    }
}
