
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
         $jamMain,
         $type;

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
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $jamMain = 0, $type = "type"){
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->jamMain = $jamMain; 
      $this->type = $type;
    }

    // 1. disini

    public function getInfoLengkap(){
      
      // Studi Kasus!!
        // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 25000) - 100 halaman
        // Game : Uncharted | Neil Duckerman, Sony Computer (Rp. 250000) ~ 50 jam
      $str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
      
      // Solusi ketika punya beberapa type berbeda
      // namun jika ada prilaku yang berbeda akan lebih merepotkan\
      // maka gunakan inheritance
      if( $this->type == "Komik" ){
        
        $str .= " - {$this->jmlHalaman} halaman";
      } else if( $this->type == "Game" ) {

        $str .= "~ {$this->jamMain} jam";
      }

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
$produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen Jump", 25000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap() . "<br>";
echo $produk2->getInfoLengkap() . "<br>";