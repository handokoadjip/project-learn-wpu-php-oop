<?php 

// static
// bisa mengkakses property dan method tanpa meng instansiasi dari class tersebut atau konteks class
// nilai akan terus berlanjut 1, 2 ,3, 4, 5
// jika tidak maka ketika instansiasi objek baru maka akan mengulang lagi dari 1

// class ContohStatic {

// 	public static $angka = 1;

// 	public static function hallo(){
// 		// $this berlaku ketika class sudah di instansiasi
// 		// return "Hallo . {$this->angka}";
// 		return "Hallo ". self::$angka++ . "kali";
// 	}

// }

// // akses property dan method tanpa instansiasi
// echo ContohStatic::$angka . "<br>";
// echo ContohStatic::hallo() . "<br>";
// echo ContohStatic::hallo() . "<br>";

class Contoh{
	public static $angka = 1;

	public function hallo(){
		return "halo " . self::$angka++ . "kali";
	}
}

$obj1 = new Contoh;
echo $obj1->hallo() . "<br>";
echo $obj1->hallo() . "<br>";
echo $obj1->hallo() . "<hr>";

$obj2 = new Contoh;

echo $obj2->hallo() . "<br>";
echo $obj2->hallo() . "<br>";
echo $obj2->hallo() . "<hr>";