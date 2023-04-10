
<?php
  echo "Kode Program PHP - Keliling dan Luas Segitiga";
  echo "<hr>";
 
  $alas = 10.25;
  $tinggi = 15.75;
 
  $sisi_miring = sqrt(($alas * $alas) + ($tinggi * $tinggi));
  $keliling_segitiga = $alas + $tinggi + $sisi_miring;
  $luas_segitiga = 1/2 * $alas * $tinggi;
 
  echo "Alas segitiga = $alas <br>";
  echo "Tinggi segitiga = $tinggi <br>";
 
  echo "<br>";
 
  echo "Sisi miring segitiga = ". round($sisi_miring,2) ." <br>";
  echo "Keliling segitiga = ". round($keliling_segitiga,2) ."<br>";
  echo "Luas segitiga = ". round($luas_segitiga,2) ."<br>";
?>