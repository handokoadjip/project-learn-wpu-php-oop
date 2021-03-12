<?php


// require 'Produk/InfoProduk.php';
// require 'Produk/Produk.php';
// require 'Produk/Komik.php';
// require 'Produk/Game.php';
// require 'Produk/CetakInfoLengkap.php';
// require 'Produk/User.php';

// require 'Services/User.php';

// spl_autoload_register() -> standart php library
// u/ memanggil nama class

// IIFE | Anonymous Function Expresion | Closure
spl_autoload_register(function($class){
	//  App\Produk\User -> [App , Produk, User]
	$class = explode("\\", $class);
	// memanggil array terakhir
	$class = end($class);
	require_once __DIR__ . '/Produk/' . $class . '.php';
 	// require __DIR__ . '/services/' . $class . '.php'; ->  harus nama file sama dengan Produk
});

spl_autoload_register(function($class){
	$class = explode("\\", $class);
	$class = end($class);
	require_once __DIR__ . '/Services/' . $class . '.php';
});