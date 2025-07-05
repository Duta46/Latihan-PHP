<?php

class Produk
{

    public $judul,
        $penulis,
        $penerbit;

    protected $diskon = 0;
    private $harga;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga')
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
};

class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga', $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga', $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik('Naruto', 'Masashi Kishimoto', 'shonen jump', 30000, 100);
$produk2 = new Game('Uncharted', 'Neil Druckmann', 'Sony Computer', 25000, 50);

echo $produk1->getInfoProduk();
echo "\n";
echo $produk2->getInfoProduk();
echo "\n";
$produk2->getDiskon(50);
echo $produk2->getHarga();
