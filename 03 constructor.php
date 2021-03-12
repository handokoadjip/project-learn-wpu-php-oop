<?php 

// blueprint
// Class
class Produk {

  // property
  // merepresentasikan data
  // dalam procedural variable
  // diawali dengan visibility

    public $judul,
         $penulis,
         $penerbit,
         $harga;

    // method
    // merepresentasikan prilaku/behavior
    // dalam procedural function
    // diawalai visibility
    
    public function sayHello(){
      return "Hello World";
    }

    // memunculkan property menggunakan method
    public function getLabel(){
      // $this untuk mengambil property diatas
      return "$this->penulis, $this->penerbit";
    }

    // magic method
    // dijalankan saat pertama instasiasi
    // parameter tidak sama dengan property
    // nilai default = 
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

}

// instansiasi dengan memasukan parameter
$produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen Jump", 25000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);

echo "Komik : {$produk1->getLabel()} <br>";
echo "Game : {$produk2->getLabel()} <br>";