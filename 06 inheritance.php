
<?php 

// note
// type data primitiv seperti integer string boelan

// blueprint
// Class
class Produk {

  // property
  // merepresentasikan data
  // dalam procedural variable
  // diawali dengan visibility

    public $judul,
         $penulis,
         $penerbit,
         $harga,
         $jmlHalaman,
         $jamMain;

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
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $jamMain = 0 ){
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->jamMain = $jamMain; 
    }

    // 1. disini

    public function getInfoLengkap(){
      
      // Studi Kasus!!
        // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 25000) - 100 halaman
        // Game : Uncharted | Neil Duckerman, Sony Computer (Rp. 250000) ~ 50 jam
      $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
      
      return $str;
    }
}

// child class dari Produk
class Komik extends Produk{
  // jika kosong maka akan meliat class Produk
  
  public function getInfoLengkap(){
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} halaman";
    return $str;  
  }
  
}

class Game extends Produk {

  public function getInfoLengkap(){
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->jamMain} jam";
    return $str;  
  }
}

// beragam cara untuk mencetak -> 1. membuat method diatas 2. membuat class baru
class CetakInfoProduk {
	
	// Produk untuk memberitahu bahwa yang boleh masuk parameter itu hanya dari instansiasi dari class Produk
	public function cetak( Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. $produk->harga)";
		return $str;
	}
}

// instansiasi dengan memasukan parameter
$produk1 = new Komik("Naruto", "Mashashi Kishimoto", "Shonen Jump", 25000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoLengkap() . "<br>";
echo $produk2->getInfoLengkap() . "<br>";