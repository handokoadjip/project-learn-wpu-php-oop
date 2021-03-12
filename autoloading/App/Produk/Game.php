<?php

// child class dari Produk harus implements InfoProduk
class Game extends Produk implements InfoProduk{

    public $jamMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jamMain = 0){

      parent::__construct($judul, $penulis, $penerbit, $harga);
      $this->jamMain = $jamMain;

    }
  function getProduk(){
      
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
      
    return $str;
  }

  public function getInfoLengkap(){
    $str = "Game : ". $this->getProduk() ." ~ {$this->jamMain} jam";
    return $str;  
  }
}