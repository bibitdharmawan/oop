<?php 
class CariRumusSegitiga{
	public $alas;
	public $tinggi;
	public $luas;
	public function __construct()
	{
		echo "Cara mencari luas segitiga <br>";
	}
	public function set_alas($alas){
		$this->alas=$alas;
	}
	public function show_alas(){
		echo "alas :".$this->alas.
		"<br>";
	}
	public function set_tinggi($tinggi){
		$this->tinggi=$tinggi;
	}
	public function show_tinggi(){
		echo "tinggi :".$this->tinggi.
		"<br>";
	}
	public function show_luas(){
		echo "maka luas segitiga : ".$this->alas*$this->tinggi/(2).
		"<br>";
	}
}
$cariRumusSegitiga= new CariRumusSegitiga();
$cariRumusSegitiga->set_alas(6);
$cariRumusSegitiga->show_alas();
$cariRumusSegitiga->set_tinggi(18);
$cariRumusSegitiga->show_tinggi();
$cariRumusSegitiga->show_luas();

class CariDiskon{
	public $persen;
	public $harga;
	public $potongan;
	public function __construct()
	{
		echo "Cara mencari Diskon <br>";
	}
	public function set_persen($persen){
		$this->persen=$persen;
	}
	public function show_persen(){
		echo "persen :".$this->persen.
		"<br>";
	}
	public function set_harga($harga){
		$this->harga=$harga;
	}
	public function show_harga(){
		echo "harga :".$this->harga.
		"<br>";
	}
	public function show_potongan(){
		echo "maka potongan harga : Rp.".$this->persen*($this->harga).
		"<br>";
	}
}
$cariDiskon= new CariDiskon();
$cariDiskon->set_persen(0.2);
$cariDiskon->show_persen();
$cariDiskon->set_harga(150000);
$cariDiskon->show_harga();
$cariDiskon->show_potongan();
 ?>
