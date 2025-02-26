<?php 

// variabele user
$nama_depan = "najwa";
$_nama_belakang = "syahri";
$umur = 17;
$tb = 190;

echo $nama_depan . " " . $_nama_belakang;
echo "<br>Nama Saya adalah  $nama_depan dan saya berumur $umur";

// variable system
echo 'DOCUMENT__ROOT' . $_SERVER['DOCUMENT_ROOT'];

// variabel constanta
define('PHI', 3.14);
$r = 8;
$luas = PHI * $r * $r;

echo "lingkaran dengan jaru-jari {$r}cm memiliki luas {$luas}cm2";
?>
