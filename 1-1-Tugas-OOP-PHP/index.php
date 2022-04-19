<?php

trait Hewan {
	public $nama;
	public $darah=50;
	public $jumlahkaki;
	public $keahlian;
	


	public function atraksi()
	{
		$this->nama . ' sedang ' . $this->keahlian;
	}
}




abstract class Fight {

	use Hewan;

	public $attackPower;
	public $defencePower; 
	
	public function serang($hewan)
	{
		echo $this->nama . " sedang menyerang " . $hewan->nama;
		echo "<br>";

		$hewan->diserang($this);

	}
	public function diserang($hewan)
	{
		echo $this->nama . " sedang diserang " . $hewan->nama;
		$this->darah = $this->darah - ($hewan->attackPower / $this->defencePower);
	}

	public function getInfo()
	{
		echo "<br>";
		echo "Nama : ($this->nama)";
		echo "<br>";
		echo "Keahlian : ($this->keahlian)";
		echo "<br>";
		echo "Attack Power : ($this->attackPower)";
		echo "<br>";
		echo "Defence Power : ($this->defencePower)";
		echo "<br>";
		echo "Darah : ($this->darah)";
		echo "<br>";
	}

}
 
class Elang extends Fight {

	public function __construct($nama){
		$this->nama = "Elang Jawa";
		$this->jumlahkaki = 2;
		$this->keahlian = "terbang tinggi";
		$this->attackPower = 10;
		$this->defencePower = 5;
	}


	public function getInfoHewan()
	{
		echo "Jenis Hewan : Elang";
		$this->getInfo();
	}

}

class Harimau extends Fight {
	public function __construct($nama) {
		$this->nama = "Harimau Jakarta";
		$this->jumlahkaki = 4;
		$this->keahlian = "lari cepat";
		$this->attackPower = 7;
		$this->defencePower = 8;
	}

	public function getInfoHewan()
	{
		echo "<br>";
		echo "Jenis Hewan : Harimau";
		$this->getInfo();
	}

}

class Spasi {
	public static function tampilkan(){
		echo "<br>";
		echo "<br>";
		echo "<br>";

	}
	
}

$elang1 = new Elang("");
$elang1->getInfoHewan();

Spasi::tampilkan();

$harimau1 = new Harimau("");
$harimau1->getInfoHewan();

Spasi::tampilkan();

$elang1->serang($harimau1);

Spasi::tampilkan();

$harimau1->getInfoHewan();

?>