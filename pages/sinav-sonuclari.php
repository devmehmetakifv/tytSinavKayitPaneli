<!DOCTYPE html>
<html lang="en">
  <head>
	  <?php
	  	session_start();
	  	if(!isset($_SESSION['uname']) || $_SESSION['uname'] != 'ogretmen'){
    		header('location:https://tytsinavkayit.tk');
    		exit;
		}
	  ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sınav Sonuçları - Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- End layout styles -->
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="index.php">
            <h5 class="ust-kisim-p" color ="white">Panel</h5>
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Sınav Sonuçları</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="text-wrapper">
                  <p class="profile-name">Hoşgeldiniz, <b><?php echo $_SESSION['uname'];?></b></p>
                  <p class="designation"></p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Panel</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Panel</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
			  <a class="nav-link" href="sinav-kayit.php">
                <span class="menu-title">Sınav Sonucunu Kaydet</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
			  <a class="nav-link" href="sinav-sonuclari.php">
                <span class="menu-title">Sınav Sonuçlarını Gör <br/> (Öğretmene Özel)</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
			<li class="nav-item nav-category">
              <span class="nav-link">Hesap Ayarları</span>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="logout.php">
                <span class="menu-title">Çıkış Yap</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <table class="table table-striped table-dark">
  <thead>
    <tr>
		<th scope="col"><b>İsim</b></th>
		<th scope="col"><b>Türkçe <br />Soruları<br />D / Y</b></th>
		<th scope="col"><b>Tarih <br />Soruları<br /> D / Y</b></th>
		<th scope="col"><b>Coğrafya <br />Soruları <br />D / Y</b></th>
		<th scope="col"><b>Felsefe <br />Soruları <br />D / Y</b></th>
		<th scope="col"><b>Din <br />Soruları <br />D / Y</b></th>
		<th scope="col"><b>Matematik <br />Soruları <br />D / Y</b></th>
		<th scope="col"><b>Fizik <br />Soruları <br />D / Y</b></th>
		<th scope="col"><b>Kimya <br />Soruları <br />D / Y</b></th>
		<th scope="col"><b>Biyoloji <br />Soruları <br />D / Y</b></th>
    </tr>
  </thead>
  <tbody>
    <?php 
		include("baglan.php");
	  	$result = mysqli_query($conn,"SELECT * FROM sinavlar");
		while($row = mysqli_fetch_array($result)){
    		echo "<tr>";
			echo "<td>" . $row['kayitIsim'] . "</td>";
			echo "<td>" . $row['turkceDogru'] . "/" . $row['turkceYanlis'] . "</td>";
			echo "<td>" . $row['tarihDogru'] . "/" . $row['tarihYanlis'] . "</td>";
			echo "<td>" . $row['cografyaDogru'] . "/" . $row['cografyaYanlis'] . "</td>";
			echo "<td>" . $row['felsefeDogru'] . "/" . $row['felsefeYanlis'] . "</td>";
			echo "<td>" . $row['dinDogru'] . "/" . $row['dinYanlis'] . "</td>";
			echo "<td>" . $row['matematikDogru'] . "/" . $row['matematikYanlis'] . "</td>";
			echo "<td>" . $row['fizikDogru'] . "/" . $row['fizikYanlis'] . "</td>";
			echo "<td>" . $row['kimyaDogru'] . "/" . $row['kimyaYanlis'] . "</td>";
			echo "<td>" . $row['biyolojiDogru'] . "/" . $row['biyolojiYanlis'] . "</td>";
			echo "</tr>";
}
?>

  </tbody>
</table>
			  <br />
		<form name="form1" method="POST" action="deletedata.php">
			<button class="btn btn-primary btn-dark" type="submit">Verileri Temizle</button>
		</form>
          <footer class="footer">
          </footer>
        </div>
      </div>
    </div>
	  </div>
  </body>
</html>