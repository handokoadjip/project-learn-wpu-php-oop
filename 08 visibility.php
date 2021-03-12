
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

  // visibility
    // public -> dapat digunakan dimana saja, bahkan diluar kelas
    // protected -> hanya dapat digunakan di dalam kelas dan turunannya
    // ptivate -> hanya dapat digunakan class tertentu
    
    public $judul,
         $penulis,
         $penerbit;
    
    protected $diskon = 0;         
    private $harga;

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

    // ketika Produk private
    public function getHarga(){
      return $this->harga - ($this->harga * $this->diskon / 100 );
    }

    // ketika diskon hanya ingin di komis
    public function setDiskon($diskon){
      $this->diskon = $diskon;
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

  public function getInfoLengkap(){

    // parent -> untuk mengambil method yang sama di parent nya
    // :: -> method static
    $str = "Komik : ". parent::getInfoLengkap() ." - {$this->jmlHalaman} halaman";
    return $str;  
  }
  
}

class Game extends Produk {

    public $jamMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jamMain = 0){

      parent::__construct($judul, $penulis, $penerbit, $harga);
      $this->jamMain = $jamMain;

    }

  public function getInfoLengkap(){
    $str = "Game : ". parent::getInfoLengkap() ." ~ {$this->jamMain} jam";
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
$produk1 = new Komik("Naruto", "Mashashi Kishimoto", "Shonen Jump", 25000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

echo $produk1->getInfoLengkap() . "<br>";
echo $produk2->getInfoLengkap() . "<br>";

echo $produk1->setDiskon(50);
echo $produk1->getHarga();

// problem public
// dapat mengganti property disini
// ex : $produk1->harga;
// $produk1->harga = 5000;