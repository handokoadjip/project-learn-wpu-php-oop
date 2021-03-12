<?php

// abstract class
// 1. sebuah kelas yang tidak bisa di inisialisasi
// 2. mendefinisikan interface/kerangka untuk kelas lain menjadi turunanya
// 3. berperan sebagai kerangka dasar untuk kelas turunanya
// 4. memiliki minimal 1 method abstact
// 5. child wajib memiliki methhod abstarct semuanya
// 6. boleh memiliki property / method reguler -> public, protected, private
// 7. boleh memiliki property / static method

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

// instansiasi dengan memasukan parameter
$produk1 = new Komik("Naruto", "Mashashi Kishimoto", "Shonen Jump", 25000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoLengkap;
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();




