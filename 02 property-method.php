<?php 

// blueprint
// Class
class Produk {

	// property
	// merepresentasikan data
	// dalam procedural variable
	// diawali dengan visibility

	// definisi nilai secara default
    public $judul = "judul",
    	   $penulis = "penulis",
    	   $penerbit = "penerbit",
    	   $harga = 0;

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

}

// implementasi blueprint
// Membuat object instance dari class

// object 1
$produk1 = new Produk();

// menimpa nilai property untuk object 1
$produk1->judul = "Avenger";

// object 2
$produk2 = new Produk();

// menimpa nilai property untuk object 2
$produk2->judul = "Uncharted";
// menambah property object 2
$produk2->tambahProperty = "example";

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Mashasi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

// membuat label dari produk 3
echo "Komik : $produk3->penulis, $produk3->penerbit <br>";

// memanggil method
echo $produk3->sayHello() . "<br>";

echo "Komik : {$produk3->getLabel()} <br>";
echo "Game : {$produk4->getLabel()}";