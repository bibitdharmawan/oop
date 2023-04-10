<?php 
class CariBilangan{
	public function cekAngka($no){
		//coding
		if($no%2==0) $bil = "Genap";
			else $bil = "Ganjil";
		echo "Angka" .$no."termasuk bilangan".
			$bil;
	}
}
$cariBilangan= new cariBilangan();
$cariBilangan->cekAngka(100);
 ?>
