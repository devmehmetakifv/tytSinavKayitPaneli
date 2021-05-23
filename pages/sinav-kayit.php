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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sinav Kayit</title>
    <link rel="stylesheet" href="vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="vendors/chartist/chartist.min.css">
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
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Sinav Kayit Sayfasi</h5>
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
            <div class = "row">
              <div class="col-sm-12">
                <form action = "sinavdb.php" method="POST">
				<table>
				<tr>
                    <td><label for="kayitIsim">Sol üstte yazan kullanıcı adınızı girin: </label></td>
                    <td><input type="text" id="kayitIsim" name="kayitIsim"></td>
                  </tr>
				</table>
				<br />
                <h2> Sozel Bolum </h2>
                <br />
                <table>
                  <tr>
                    <td><h5> Turkce Bolumu (40 Soru)</h5></td>
                  </tr>
                  <tr>
                    <td><label for="turkceDogru">Dogru Sayisi (0 - 40):</label></td>
                    <td><input type="number" id="turkceDogru" name="turkceDogru" min="0" max="40"></td>
                  </tr>
                  <tr>
                    <td><label for="turkceYanlis">Yanlis Sayisi (0 - 40):</label></td>
                    <td><input type="number" id="turkceYanlis" name="turkceYanlis" min="0" max="40"></td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td><h5> Tarih Bolumu (5 Soru)</h5></td>
                  </tr>
                  <tr>
                    <td><label for="tarihDogru">Dogru Sayisi (0 - 5):</label></td>
                    <td><input type="number" id="tarihDogru" name="tarihDogru" min="0" max="5"></td>
                  </tr>
                  <tr>
                    <td><label for="turkceYanlis">Yanlis Sayisi (0 - 5):</label></td>
                    <td><input type="number" id="tarihYanlis" name="tarihYanlis" min="0" max="5"></td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td><h5> Cografya Bolumu (5 Soru)</h5></td>
                  </tr>
                  <tr>
                    <td><label for="cografyaDogru">Dogru Sayisi (0 - 5):</label></td>
                    <td><input type="number" id="cografyaDogru" name="cografyaDogru" min="0" max="5"></td>
                  </tr>
                  <tr>
                    <td><label for="cografyaYanlis">Yanlis Sayisi (0 - 5):</label></td>
                    <td><input type="number" id="cografyaYanlis" name="cografyaYanlis" min="0" max="5"></td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td><h5> Felsefe Bolumu (5 Soru)</h5></td>
                  </tr>
                  <tr>
                    <td><label for="felsefeDogru">Dogru Sayisi (0 - 5):</label></td>
                    <td><input type="number" id="felsefeDogru" name="felsefeDogru" min="0" max="5"></td>
                  </tr>
                  <tr>
                    <td><label for="felsefeYanlis">Yanlis Sayisi (0 - 5):</label></td>
                    <td><input type="number" id="felsefeYanlis" name="felsefeYanlis" min="0" max="5"></td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td><h5> Din Kulturu Bolumu (5 Soru)</h5></td>
                  </tr>
                  <tr>
                    <td><label for="dinDogru">Dogru Sayisi (0 - 5):</label></td>
                    <td><input type="number" id="dinDogru" name="dinDogru" min="0" max="5"></td>
                  </tr>
                  <tr>
                    <td><label for="dinYanlis">Yanlis Sayisi (0 - 5):</label></td>
                    <td><input type="number" id="dinYanlis" name="dinYanlis" min="0" max="5"></td>
                  </tr>
                </table>
                <br />
					</div>
            </div>
            <div class = "row">
              <div class="col-sm-12">
                <h2> Sayisal Bolum </h2>
                <br />
                  <table>
                    <tr>
                      <td><h5> Matematik Bolumu (40 Soru)</h5></td>
                    </tr>
                    <tr>
                      <td><label for="matematikDogru">Dogru Sayisi (0 - 40):</label></td>
                      <td><input type="number" id="matematikDogru" name="matematikDogru" min="0" max="40"></td>
                    </tr>
                    <tr>
                      <td><label for="matematikYanlis">Yanlis Sayisi (0 - 40):</label></td>
                      <td><input type="number" id="matematikYanlis" name="matematikYanlis" min="0" max="40"></td>
                    </tr>
                  </table>
                  <table>
                    <tr>
                      <td><h5> Fizik Bolumu (7 Soru)</h5></td>
                    </tr>
                    <tr>
                      <td><label for="fizikDogru">Dogru Sayisi (0 - 7):</label></td>
                      <td><input type="number" id="fizikDogru" name="fizikDogru" min="0" max="7"></td>
                    </tr>
                    <tr>
                      <td><label for="fizikYanlis">Yanlis Sayisi (0 - 7):</label></td>
                      <td><input type="number" id="fizikYanlis" name="fizikYanlis" min="0" max="7"></td>
                    </tr>
                  </table>
                  <table>
                    <tr>
                      <td><h5> Kimya Bolumu (7 Soru)</h5></td>
                    </tr>
                    <tr>
                      <td><label for="kimyaDogru">Dogru Sayisi (0 - 7):</label></td>
                      <td><input type="number" id="kimyaDogru" name="kimyaDogru" min="0" max="7"></td>
                    </tr>
                    <tr>
                      <td><label for="kimyaYanlis">Yanlis Sayisi (0 - 7):</label></td>
                      <td><input type="number" id="kimyaYanlis" name="kimyaYanlis" min="0" max="7"></td>
                    </tr>
                  </table>
                  <table>
                    <tr>
                      <td><h5> Biyoloji Bolumu (6 Soru)</h5></td>
                    </tr>
                    <tr>
                      <td><label for="biyolojiDogru">Dogru Sayisi (0 - 7):</label></td>
                      <td><input type="number" id="biyolojiDogru" name="biyolojiDogru" min="0" max="6"></td>
                    </tr>
                    <tr>
                      <td><label for="biyolojiYanlis">Yanlis Sayisi (0 - 7):</label></td>
                      <td><input type="number" id="biyolojiYanlis" name="biyolojiYanlis" min="0" max="6"></td>
                    </tr>
                  </table>
                </div>
              </div>
           <div class="mt-3">
                    <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Giriş Yap">
                  </div>
           </div>
	    </div>
	   </div>
      </div>
     </div>
    </div>
  </body>
</html>