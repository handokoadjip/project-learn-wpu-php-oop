
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
         $harga;

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
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

    // 1. disini

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
$produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen Jump", 25000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);

// instansiasi class baru
$infoProduk1 = new CetakInfoProduk();

echo "{$infoProduk1->cetak($produk1)} <hr>";
echo "Komik : {$produk1->getLabel()} <br>";
echo "Game : {$produk2->getLabel()} <br>";
