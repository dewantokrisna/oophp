<?php

class Produk
{
    public $judul = 'judul',
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit  = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
        return $str;
    }
}
// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// $produk1->penulis = "Masashi Kishimoto";
// $produk1->penerbit = "Shonen Jump";
// $produk1->harga = "50000";

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
echo $produk1->getLabel();
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
