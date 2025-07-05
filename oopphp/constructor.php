<?php 

class Produk {

    public $judul,
           $penulis,
           $penerbit,
           $harga;
    
    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga') {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
};

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = 'Test';
// var_dump($produk2->judul);

$produk1 = new Produk('Naruto', 'Masashi Kishimoto', 'shonen jump', 30000);

$produk2 = new Produk('Uncharted', 'Neil Druckmann', 'Sony Computer', 25000 );

echo "Komik : " . $produk1->getLabel() . "\n";
echo "Game : " . $produk2->getLabel();



