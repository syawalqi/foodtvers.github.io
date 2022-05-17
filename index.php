<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FoodTvers</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.7.1
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">FoodTvers</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Recipe</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="indexlogin.php">Login</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

 <?php require_once "config.php";

// Attempt select query execution
$sql = "SELECT * FROM niagahoster";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
              $name = isset($row['name']) ? $row['name'] : '';
              $name1 = isset($row['name1']) ? $row['name1'] : '';
              $address = isset($row['address']) ? $row['address'] : '';
              $name2 = isset($row['name2']) ? $row['name2'] : '';
              $name3 = isset($row['name3']) ? $row['name3'] : '';
              $name4 = isset($row['name4']) ? $row['name4'] : '';
              $name5 = isset($row['name5']) ? $row['name5'] : '';
              $name6 = isset($row['name6']) ? $row['name6'] : '';
              $name7 = isset($row['name7']) ? $row['name7'] : '';
              $name8 = isset($row['name8']) ? $row['name8'] : '';
              $name9 = isset($row['name9']) ? $row['name9'] : '';
              $name10 = isset($row['name10']) ? $row['name10'] : '';
              $name11 = isset($row['name11']) ? $row['name11'] : '';
              $name12 = isset($row['name12']) ? $row['name12'] : '';
                echo "<tr>";
                    echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "<p class='lead'><em>No records were found.</em></p>";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$no = 1;
				$get_data = mysqli_query($link,"SELECT * FROM siswa");
				while ($data = mysqli_fetch_array($get_data)) {

          $data = isset($data['siswa_foto']) ? $data['siswa_foto'] : '';

        }

// Close connection
mysqli_close($link);?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span><br>FoodTvers<br></span>Resep makanan Indonesia</h2>
                <p class="animate__animated animate__fadeInUp"><?php echo $name; ?></p>
                <div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Kumpulan resep Indonesia</h2>
                <p class="animate__animated animate__fadeInUp"><?php echo $name1; ?></p>
                <div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Makanan dari Indonesia</h2>
                <p class="animate__animated animate__fadeInUp"><?php echo $address; ?></p>
                <div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about.jpg");'>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3><?php echo $name2; ?><strong> ENAK?</strong></h3>
              <p>
              <?php echo $name3; ?>
              </p>
              <p class="fst-italic">
              <?php echo $name4; ?>
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i><?php echo $name5; ?></li>
                <li><i class="bx bx-check-double"></i><?php echo $name6; ?></li>
                <li><i class="bx bx-check-double"></i><?php echo $name7; ?></li>
              </ul>
              <p>
              <?php echo $name8; ?>
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Resep makanan  <span>Indonesia</span></h2>
          <p><?php echo $name9; ?></p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>TERSEBAR</h4>
              <p><?php echo $name10; ?></p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>TERKENAL</h4>
              <p><?php echo $name11; ?></p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4> Mudah di ikuti</h4>
              <p><?php echo $name12; ?></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Lihat resep kami <span><br>MENU</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Resep</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a>Telur Balado</a><span></span>
            </div>
            <div class="menu-ingredients">
              Telur goreng dan sambal balado 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a>Rendang</a><span></span>
           </div>
            <div class="menu-ingredients">
              Daging dimasak dengan santan
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a>Nasi Goreng</a><span></span>
            </div>
            <div class="menu-ingredients">
              Nasi goreng dengan sosis, bakso, ayam
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a>Soto</a><span></span>
            </div>
            <div class="menu-ingredients">
              sup ayam dengan kuah yang berwarna kekuningan. Warna kuning ini dikarenakan oleh kunyit yang digunakan sebagai bumbu
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a>Gudeg</a><span></span>
            </div>
            <div class="menu-ingredients">
              nangka muda yang dimasak dengan santan. disajikan lengkap dengan krecek, ayam kuah santan, hingga telur.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a>Sate</a><span></span>
            </div>
            <div class="menu-ingredients">
              terbuat dari daging yang dipotong kecil-kecil dan ditusuk kemudian dipanggang menggunakan bara arang kayu.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a>Ayam Goreng</a><span></span>
            </div>
            <div class="menu-ingredients">
              daging ayam yang dilapisi tepung yang telah diberi bumbu sebelum dimasak,
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a>Gado-Gado</a><span></span>
            </div>
            <div class="menu-ingredients">
              sayur-sayuran yang direbus, irisan telur dan tahu, serta ditaburi bawang goreng dan kerupuk.
              Sayur-sayuran ditambahkan dengan bumbu kacang atau saus dari kacang
              tanah yang telah dihaluskan yang kemudian diaduk merata.
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Menu <span>Tradisional</span></h2>
          <p>Menu tradisional dari beberapa tempat di Indonesia yang terkenal.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Mie Aceh</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Rendang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pempek</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Otak-otak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Kerak telur</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Deskripsi Mie Aceh</h3>
                    <p class="fst-italic">Mi, daging (kambing atau sapi) atau makanan laut (udang dan ikan), rempah sejenis kari, seledri, daun bawang, bawang merah</p>
                    <p>Mi aceh adalah masakan mi pedas khas Aceh di Indonesia. Mie kuning tebal dengan irisan daging sapi, daging kambing atau makanan laut (udang dan cumi) disajikan dalam sup sejenis kari yang gurih dan pedas.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Deskripsi Rendang</h3>
                    <p class="fst-italic">santan kelapa (karambia), dan campuran dari bermacam bumbu khas yang dihaluskan di selangnya cabai (lado), serai, lengkuas, kunyit, jahe, bawang putih, bawang merah dan aneka bumbu lainnya yang pada umumnya dikata untuk pemasak</p>
                    <p>Sumatera Barat terkenal dengan makanan Padang yang berasal dari kota Padang. Makanan yang banyak rempahnya ini mempunyai rasa yang kuat. Rendang adalah salah satu masakan Padang yang menjadi favorit banyak orang Indonesiabahkan sampai luar negeri.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Deskripsi Pempek</h3>
                    <p class="fst-italic">Pempek atau empek-empek adalah makanan yang terbuat dari daging ikan yang digiling lembut yang dicampur tepung kanji atau tepung sagu, serta komposisi beberapa bahan lain seperti telur, bawang putih yang dihaluskan, penyedap rasa, dan garam. Pempek biasanya disajikan dengan kuah cuka yang memiliki rasa asam, manis, dan pedas. Pempek sering disebut sebagai makanan khas Palembang, meskipun hampir semua daerah di Sumatera Selatan, Jambi dan Bengkulu juga memproduksinya.</p>
                    <p>Pempek dapat ditemukan dengan mudah di Kota Palembang, beberapa daerah Sumatera Selatan hingga provinsi Bengkulu; ada yang menjualnya di restoran, ada yang di pinggir jalan, dan pula yang dipikul. Pada tahun 1880-an, penjual biasa memikul satu keranjang penuh pempek sambil berjalan kaki berkeliling menjajakan dagangannya..</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Otak-otak</h3>
                    <p class="fst-italic">Otak-otak ini dibungkus dengan daun berwarna hijau sekalian dengan lidinya, yang kemudian dibakar dengan bara api</p>
                    <p>Otak-otak adalah salah satu makanan khas di Kepulauan Riau, baik di Batam, Tanjung Pinang, maupun di Pulau Penyengat. Di sini terdapat dua jenis otak-otak yaitu otak-otak yang terbuat dari ikan dan dari cumi yang lebih pedas. Otak-otak ini dibungkus dengan daun berwarna hijau sekalian dengan lidinya, yang kemudian dibakar dengan bara api.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Deskripsi Kerak telur</h3>
                    <p class="fst-italic">Kerak telor adalah makanan khas Betawi yang terbuat dari campuran beras ketan, telur bebek, dan kelapa parut sangrai. Cara masak kerak telor ala rumahan bisa pakai wajan dadar antilengket.</p>
                    <p>Kerak telor dapat ditemukan pada hari biasa. Anda bisa menemukan kerak telor di sekitar Kota Tua, Jakarta Barat. Menurut sejarah, Kerak Telor sudah ada dari zaman kolonial Belanda, kerak telor diciptakan oleh masyarakat Betawi secara tak sengaja Pada tahun 1970-an</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>FoodTvers</h3>
      <p>tempat dimana kalian bisa dapat resep dari masakan indonesia</p>
      <div class="social-links">
        <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://skype.com" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="https://linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Foodtvers</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>