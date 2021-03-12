<?php 

// define() -> tidak bisa digunakan dalam kelas
// const -> bisa digunakan dalam kelas

// biasakan huruf kapital semua untuk konstanta

define("NAMA", "Handoko");
echo NAMA;

echo "<br>";

const UMUR = 10;
echo UMUR;

echo "<br>";

class Coba {
	const JUDUL = "Uncharted";
}

echo Coba::JUDUL;

// magic constant
// __LINE__ -> MENAMPILKAN ANGKA 25 KARENA ADA BARIS DI 25
// __FILE__ -> MENAMPILKAN ALAMT DARI FILE APA
// __DIR__ -> MENGETAHUI LAGI ADA DI DIREKTORI YANG BERSANGKUTAN
// __FUNCTION__ -> MENENTUKAN FUNCTION DI APA
// __CLASS__ -> MENENTUKAN FUNCTION DI APA
// __TRAIT__
// __METHOD__
// __NAMESPACE__