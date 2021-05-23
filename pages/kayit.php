<?php
		$kullaniciadi = $_POST['kadi'];

		$sifre = $_POST['sifre'];

		if(empty($kullaniciadi))
		{
			echo("<center><b>Kullanıcı Adınızı Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
		}
		elseif(empty($sifre))
		{
			echo("<center><b>Şifrenizi Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
		}
		else{
			include("baglan.php");
			$sql = "INSERT INTO uye(kullaniciadi, sifre) VALUES ('$kullaniciadi','$sifre')";
			$kayit = mysqli_query($conn, $sql);
			}
			if ($kayit == 0){
				echo "<center><b>Bir hata oluştu. Sunucu admini ile bağlantıya geçin.</center></b>";
				echo "<center><b><a href='mailto:info@mehmetakifvardar.com'>Link text</a></b></center>";
			}
			else {
				echo "<center><b>Kayıt başarılı!</center></b>";
				echo "<center><b><a href='https://tytsinavkayit.tk'>Buradan</a> giriş sayfasına dönüp giriş yapınız. </b></center>";
			}
				  	
?>