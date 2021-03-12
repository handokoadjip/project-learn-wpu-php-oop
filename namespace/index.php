<?php

// benar namun akan merepotkan jika banyak
	// require 'App/Produk/InfoProduk.php';
	// require 'App/Produk/Produk.php';
	// require 'App/Produk/Komik.php';
	// require 'App/Produk/Game.php';
	// require 'App/Produk/CetakInfoLengkap.php';
	 
// init -> inisialisasi kelas
require 'App/init.php';

// instansiasi dengan memasukan parameter
$produk1 = new Komik("Naruto", "Mashashi Kishimoto", "Shonen Jump", 25000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoLengkap;
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

echo '<hr>';

// alias
use App\Produk\User as ProdukUser;
use App\Services\User as ServicesUser;

// mengambil user di namespace produk
new ProdukUser();
echo '<br>';
new ServicesUser();
