<?php

// beragam cara untuk mencetak -> 1. membuat method diatas 2. membuat class baru
class CetakInfoLengkap {
	public $daftarLengkaps = [];

  // type hinting -> object type
	public function tambahProduk(Produk $produk){
		$this->daftarLengkaps[] = $produk;
	}

	// Produk untuk memberitahu bahwa yang boleh masuk parameter itu hanya dari instansiasi dari class Produk
	public function cetak(){
		$str = "Daftar Produk : <br>";

		foreach ($this->daftarLengkaps as $daftarLengkap) {
			$str .= "- {$daftarLengkap->getInfoLengkap()} <br>";
		}

		return $str;
	}
}