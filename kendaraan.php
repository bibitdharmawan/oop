<?php 
class kendaraan {
	Private $warna;
	Private $jumlah_pintu;
	Private $jumlah_roda;
	public $harga;
	Public $merk;

	public function __construct()
	{
		echo "ini adalah objek kendaraan. <br>";
	}
	public function set_harga($harga){
		$this->harga = $harga;
	}
	public function show_harga(){
		echo "Harga kendaraan : Rp.".$this->harga.
		"<br>";
	}
	public function jalan(){
		echo "brooom";
	}
}
$saya_adalah_object = new kendaraan();
$saya_adalah_object->set_harga(100000);
$saya_adalah_object->show_harga();
$saya_adalah_object->jalan();

 ?>
