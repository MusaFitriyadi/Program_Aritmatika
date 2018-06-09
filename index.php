<!DOCTYPE html>
<html>
<head>
	<title>Postest</title>
</head>
<body>
	<h1>Program Aritmatika</h1>
	<form name="operasi" method="post" action="proses.php"><pre>
	Nilai satu <input type="text" name="angka1" required=”required”><br>
	Nilai dua <input type="text" name="angka2" required=”required”><br>
	Operator  <select name="operasi">  
		<option value="">Operasi</option>  
		<option value="Penjumlahan">Penjumlahan</option>  
		<option value="Pengurangan">Pengurangan</option>  
		<option value="Pembagian">Pembagian</option>  
		<option value="Perkalian">Perkalian</option>
		</select>
		</pre>
		<input type="reset" name="reset" value="Reset">
		<input type="submit" name="submit" value="Submit">
	
	</form>
</body>
</html>