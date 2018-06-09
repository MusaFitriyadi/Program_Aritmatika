<title>Hasil</title>
<?php  
$a = $_POST['angka1'];
	$b = $_POST['angka2'];
	$op = $_POST['operasi'];
	if ($op=="Penjumlahan") {
		$hasil = $a + $b;
		echo "Hasil dari $a + $b = $hasil";
	}
	else if ($op=="Pengurangan") {
		$hasil = $a - $b;
		echo "Hasil dari $a - $b = $hasil";
	}
	else if ($op=="Pembagian") {
		$hasil = $a / $b;
		echo "Hasil dari $a / $b = $hasil";
	}
	else if ($op=="Perkalian") {
		$hasil = $a * $b;
		echo "Hasil dari $a x $b = $hasil";
	}
?>
