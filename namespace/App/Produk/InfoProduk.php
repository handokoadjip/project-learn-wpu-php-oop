<?php

// interface
// 1. merupakan murni untuk template class child
// 2. tidak boleh memiliki property
// 3. harus implementasi semua method interface pada child class
// 4. semua method harus public
// 5. boleh deklarasi __construct()
// 6. satu kelas boleh implementasi banyak interface ex class Apel implemets Buah, Benda{}

// note dependency injection -> memaksakan sebuah method untuk parameter nya object
// Polimorphism -> ketika child class implements kebanyak interface namu memiliki fungsi yang berbeda

// contoh
// interface Buah {
//  public function makan();
//  public function setWarna($warna); 
// }

// class Apel implements Buah{
//  protected $warna;
//  public function makan(){
//    kunyah..
//    makan..
//  }
//  public function setWarna($warna){
//    $this->warna = $warna;
//  }
// }

// interface
interface InfoProduk {
  // semua child punya getInfoProduk
  public function getInfoLengkap();
}