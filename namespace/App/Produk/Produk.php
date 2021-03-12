<?php

// abstract class
// 1. sebuah kelas yang tidak bisa di inisialisasi
// 2. mendefinisikan interface/kerangka untuk kelas lain menjadi turunanya
// 3. berperan sebagai kerangka dasar untuk kelas turunanya
// 4. memiliki minimal 1 method abstact
// 5. child wajib memiliki methhod abstarct semuanya
// 6. boleh memiliki property / method reguler -> public, protected, private
// 7. boleh memiliki property / static method

// contoh
// abstact class Buah{
// 	private $warna;

// 	abstact public function makan(); -> method abstak hanya interface/kerangka yang implementasinya nanti ada dikelas child

// 	public function setWarna($warna){
// 		$this->warna = $warna;
// 	}
// }

// class Jeruk extends Buah{

// }

// $jeruk = new Jeruk();
// $jeruk->makan(); -> manis

// $buah = new Buah();
// $buah->maka(); ->bingung

// note
// type data primitiv seperti integer string boelan

// blueprint
// Class

// abstract class
abstract class Produk {

  // property
  // merepresentasikan data
  // dalam procedural variable
  // diawali dengan visibility

  // visibility
    // public -> dapat digunakan dimana saja, bahkan diluar kelas
    // protected -> hanya dapat digunakan di dalam kelas dan turunannya
    // ptivate -> hanya dapat digunakan class tertentu
    
    protected $judul,
         $penulis,
         $penerbit,
         $harga,
         $diskon = 0;         

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
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

    // Setter and Getter
    // agar dapat mem validasi
    
    public function setJudul($judul){
      // validasi
      // if( !is_string($judul) ){
      //   throw new Exception('judul harus string');
      // }

      $this->judul = $judul;
    }

    public function getJudul(){
      return $this->judul;
    }

    public function setPenulis($penulis){
      $this->penulis = $penulis;
    }

    public function getPenulis(){
      return $this->penulis;
    }

    public function setPenerbit($penerbit){
      $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
      return $this->penerbit;
    }

    public function setHarga($harga){
      $this->harga = $harga;
    }

    // ketika Produk private
    public function getHarga(){
      return $this->harga - ($this->harga * $this->diskon / 100 );
    }

    public function setDiskon($diskon){
      $this->diskon = $diskon;
    }

    public function getDiskon(){
      return $this->diskon . "%";
    } 

    // 1. disini

  abstract function getProduk();

}