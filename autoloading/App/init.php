<?php


// require 'Produk/InfoProduk.php';
// require 'Produk/Produk.php';
// require 'Produk/Komik.php';
// require 'Produk/Game.php';
// require 'Produk/CetakInfoLengkap.php';

// spl_autoload_register() -> standart php library
// u/ memanggil nama class

// IIFE | Anonymous Function Expresion | Closure
spl_autoload_register(function($class){
	require __DIR__ . '/produk/' . $class . '.php';
});

