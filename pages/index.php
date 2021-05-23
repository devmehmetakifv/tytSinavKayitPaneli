<!DOCTYPE html>
<html lang="en">
  <head>
	  <?php
	  	session_start();
	  	if(!isset($_SESSION['uname'])){
    		header('location:https://tytsinavkayit.tk');
    		exit;
		}
	  ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Panel</title>
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
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Panel</h5>
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
            <!-- Quick Action Toolbar Starts-->
            <div class="row quick-action-toolbar">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-header d-block d-md-flex">
                    <h4 class="mb-0">Bilgilendirme</h4>
                  </div>
                  <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
					  <center>
					  <br />
						<h4 class="mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sol taraftaki menüden "Sınav Sonucunu Kaydet" seçeneğine tıklayın ve açılan pencerede bütün bilgileri eksiksiz doldurun.</h4>
						  <br />
						<h4 class ="mb-0">Bir sorunla karşılaşırsanız hemen bildirin.</h4>
						  <br />
					  </center>
					  <br />
                  </div>
                </div>
              </div>
            </div>
            <!-- Quick Action Toolbar Ends-->
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
	<script type="text/javascript" src="js/jquery.min.js"  ></script>
    <script type="text/javascript" src="js/bootstrap.min.js"  ></script>
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>