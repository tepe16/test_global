<!DOCTYPE html>
<html>
<body>

<h2>SOAL ESSAY NO 3</h2>

<form form action="" method="POST">
  <label for="fname">Masukan Angka</label><br>
  <input type="number" id="angka" name="angka"><br>
  <input type="submit" name='kirim' value="Submit">
</form> 


</body>
</html>

HASIL : <br>
<?php
if(isset($_POST['kirim'])){

    $angka = $_POST['angka'];
    
    
	
	for($a=1; $a<=$angka; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$angka; $c>=$a; $c-=1){
		echo "xo";
	}
	echo "<br>";
	}
	for( $a=$angka;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo "&nbsp";
	}
	for($a1=$angka;$a1>=$a;$a1--){
		echo"xo";
	}
	echo"<br>";
	}

}
?>