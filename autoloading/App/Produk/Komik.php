<?php

// child class dari Produk harus implements InfoProduk
class Komik extends Produk implements InfoProduk{
  // jika kosong maka akan meliat class Produk
  
  public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){

      // method parent
      parent::__construct($judul, $penulis, $penerbit, $harga);
      $this->jmlHalaman = $jmlHalaman;

    }

  // ketika harga di Produk protected
  // public function getHarga(){
  //   return $this->harga;
  // }

  function getProduk(){
      
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
      
    return $str;
  }

  public function getInfoLengkap(){

    // parent -> untuk mengambil method yang sama di parent nya
    // :: -> method static
    $str = "Komik : ". $this->getProduk() ." - {$this->jmlHalaman} halaman";
    return $str;  
  }

  // ketika Produk private
    // public function getHarga(){
    //   return $this->harga - ($this->harga * $this->diskon / 100 );
    // }
  
}