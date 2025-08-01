<?php 

class Produk {

    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;
    
    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga', $jmlHalaman = 0, $waktuMain = 0, $tipe = 'tipe') {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
       $this->jmlHalaman = $jmlHalaman;
       $this->waktuMain = $waktuMain;
       $this->tipe = $tipe;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfo() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == 'Komik') {
            $str .= " - {$this->jmlHalaman} Halaman";
        } else {
            $str .= " - {$this->waktuMain} Jam";
        }

        return $str;
    }
};

class CetakInfoProduk {
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

        return $str;
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = 'Test';
// var_dump($produk2->judul);

$produk1 = new Produk('Naruto', 'Masashi Kishimoto', 'shonen jump', 30000, 100, 0, "Komik");
$produk2 = new Produk('Uncharted', 'Neil Druckmann', 'Sony Computer', 25000, 0, 50, "Game" );

echo $produk1->getInfo();
echo "\n";
echo $produk2->getInfo();

