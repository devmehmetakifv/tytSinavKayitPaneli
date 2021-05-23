<?php
	include("baglan.php");

	$sql = "DELETE FROM sinavlar";
		if (mysqli_query($conn, $sql)) {
    		echo "Kayıtlar başarı ile silindi.";
			echo "<br />";
			echo "<a href = 'https://tytsinavkayit.tk/pages/index.php'>Buradan</a> panele dönüş yapınız.";
		}else {
    		echo "Error deleting record: " . mysqli_error($conn);
		}
	mysqli_close($conn);
?>