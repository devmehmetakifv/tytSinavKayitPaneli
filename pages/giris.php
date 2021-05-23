<?php
include "baglan.php";
$uname = $_POST['girisKadi'];
$password = $_POST['girisSifre'];
	if ($uname != "" || $password != ""){
		$sql_query = "SELECT count(*) as cntUser FROM uye WHERE kullaniciadi='".$uname."' and sifre='".$password."'";
		$result = mysqli_query($conn,$sql_query);
		$row = mysqli_fetch_array($result);
		$count = $row['cntUser'];
			if($count > 0){
				session_start();
				$_SESSION['uname'] = $uname;
				header('Location:https://tytsinavkayit.tk/pages/index.php');
			}else{
				echo "Kullanıcı adı veya şifre hatalı. Lütfen tekrar deneyin.";
			}
	}
?>