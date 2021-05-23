<?php
	$kayitIsim = $_POST['kayitIsim'];
	$turkceDogru = $_POST['turkceDogru'];
	$turkceYanlis = $_POST['turkceYanlis'];
	$tarihDogru = $_POST['tarihDogru'];
	$tarihYanlis = $_POST['tarihYanlis'];
	$cografyaDogru = $_POST['cografyaDogru'];
	$cografyaYanlis = $_POST['cografyaYanlis'];
	$felsefeDogru = $_POST['felsefeDogru'];
	$felsefeYanlis = $_POST['felsefeYanlis'];
	$dinDogru = $_POST['dinDogru'];
	$dinYanlis = $_POST['dinYanlis'];
	$matematikDogru = $_POST['matematikDogru'];
	$matematikYanlis = $_POST['matematikYanlis'];
	$fizikDogru = $_POST['fizikDogru'];
	$fizikYanlis = $_POST['fizikYanlis'];
	$kimyaDogru = $_POST['kimyaDogru'];
	$kimyaYanlis = $_POST['kimyaYanlis'];
	$biyolojiDogru = $_POST['biyolojiDogru'];
	$biyolojiYanlis = $_POST['biyolojiYanlis'];

	if ($kayitIsim != '' && $turkceDogru != '' && $turkceYanlis != '' && $tarihDogru != '' && $tarihYanlis != '' && $cografyaDogru != '' && $cografyaYanlis != '' && $felsefeDogru != '' && $felsefeYanlis != '' && $dinDogru != '' && $dinYanlis != '' && $matematikDogru != '' && $matematikYanlis != '' && $fizikDogru != '' && $fizikYanlis != '' && $kimyaDogru != '' && $kimyaYanlis != '' && $biyolojiDogru != '' && $biyolojiYanlis != ''){
	
	include ("baglan.php");
	$sql = "INSERT INTO sinavlar(kayitIsim, turkceDogru, turkceYanlis, tarihDogru, tarihYanlis, cografyaDogru, cografyaYanlis, felsefeDogru, felsefeYanlis, dinDogru, dinYanlis, matematikDogru, matematikYanlis, fizikDogru, fizikYanlis, kimyaDogru, kimyaYanlis, biyolojiDogru, biyolojiYanlis) VALUES ('$kayitIsim','$turkceDogru','$turkceYanlis','$tarihDogru','$tarihYanlis','$cografyaDogru','$cografyaYanlis','$felsefeDogru','$felsefeYanlis','$dinDogru','$dinYanlis','$matematikDogru','$matematikYanlis','$fizikDogru','$fizikYanlis','$kimyaDogru','$kimyaYanlis','$biyolojiDogru','$biyolojiYanlis')";
		
	$kayit = mysqli_query($conn, $sql);
	if ($kayit == 0){
		echo "<center><b>Bir hata oluştu. Sunucu admini ile bağlantıya geçin.</center></b>";
		echo "<center><b><a href='mailto:info@mehmetakifvardar.com'>Link text</a></b></center>";
		}
	else {
		echo "<center><b>Kayıt başarılı!</center></b>";
		echo "<center><b><a href='https://tytsinavkayit.tk/pages/index.php'>Buradan</a> panele geri dönüş yapınız. </b></center>";
		}
	
	
	
	}
	else{
		echo "Girmediğiniz bilgiler var. Hata!";
		}
?>

















?>