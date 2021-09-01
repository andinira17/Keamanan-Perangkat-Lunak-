<?php
if(isset($_GET["Hitung"])){
	if ($nilai >=90){
	$hasil .="<br>A";
}
else if ($nilai >=80){
	$hasil .="<br>B";
}
else if ($nilai >=70){
	$hasil .="<br>C";
}
else if ($nilai >=90){
	$hasil .="<br>D";
}
else if ($nilai >=90){
	$hasil .="<br>E";
}
$p=$_GET['p'];
$t=$_GET['t'];
$uts=$_GET['uts'];
$uas=$_GET['uas'];
$hasil;
$nilai=((2*$p)+(3*$t)+(2*$uts)+(3*$uas))/10;
if ($p <0||$t <0||$uts <0||$uas <0){
			$hasil= "Data tidak terbaca<br>";
		} 
		else {
			$hasil= strval($nilai);

		}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Nilai Mahasiswa Unesa</title>
	<style>
		body{
			background-image: url(bgg.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
		}
	</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poly&display=swap" rel="stylesheet">
</head>
<body>
	<div align="center">
	<form action="" method="GET" >
	<h1>NILAI MAHASISWA UNESA</h1><br>
	<p>Partisipasi</p>
	<input type="partisipasi" name="p">
	<p>Tugas</p>
	<input type="tugas" name="t">
	<p>uts</p>
	<input type="uts" name="uts"><br>
	<p>uas</p>
	<input type="uas" name="uas"><br>
	<input type="submit" name="Hitung"  class="btn btn-primary">
    <button type="reset" class="btn btn-secondary">Reset</button>
	<br>
	<br>
	<br>
	<h1 align="center">
		<?php
		if(isset($_GET["Hitung"])){
		echo $hasil;
		}
		?>
		
	</h1>
</form>
</div>
</body>
</html>

