<?php 

class Produk {

    public $judul = 'Judul',
           $penulis = 'penulis',
           $penerbit = 'penerbit',
           $harga = 0;
    
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

$produk3 = new Produk();
$produk3->judul = 'Naruto';
$produk3->penulis = 'Masashi Kishimoto';
$produk3->penerbit = 'shonen jump';
$produk3->harga = 30000;

// echo "Komik : $produk3->judul, $produk3->penulis";
// echo "<br>";
// echo $produk3->getLabel();

$produk4 = new Produk();
$produk4->judul = 'Uncharted';
$produk4->penulis = 'Neil Druckmann';
$produk4->penerbit = 'Sony Computer';
$produk4->harga = 25000;

echo "Komik : " . $produk3->getLabel() . "\n";
echo "Game : " . $produk4->getLabel();



