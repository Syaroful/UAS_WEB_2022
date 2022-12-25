<?php
require 'functions.php';
$dishmenu = query("SELECT * FROM menu ORDER BY id DESC
LIMIT 4");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title></title>
  <script src="https://kit.fontawesome.com/92bceb20d8.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="asset/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <script src="asset/javaskrip.js" defer></script>
</head>

<body>
  <!-- NAVIGASI BAR -->
  <nav class="fixed-top bg-light">
    <div class="container">
      <div class="container-fluid justify-content-center d-flex flex-wrap align-items-center justify-content-md-between py-3 mb-3">
        <!-- LOGO Fitmeal -->
        <a class="navbar-brand" href="#">
          <i class="fa-solid fa-fork-knife"></i>
          <b>
            <font style="color: #ffb800">Fit</font>meal
          </b>
        </a>
        <!-- Navigation Button -->
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link link-dark" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" href="#about_us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" href="booking.php">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" href="#menu">Product</a>
          </li>
        </ul>
        <!-- Tombol Login and Sign Up -->
        <div class="col-md-3 text-end">
          <a href="booking.php">
            <div class="button-like">Book Now</div>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <br />
  <div class="container subjudul">
    <br />
    <font style="font-size: 29px">Menu Populer</font><br />
    __________
  </div>
  <br /><br />
  <!-- Ini Outo slide -->
  <div class="container-fluid justify-content-center d-flex flex-wrap align-items-center justify-content-md-between big-banner">
    <div class="banner">
      <div class="swiper">
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div>
              <h3>Spaghetti and turkey meatballs <br /><br /></h3>
              <p>
                Anda pasti akan menyukai hidangan lezat ini. Spaghetti ini
                <br />
                dilengkapi dengan bakso daging kalkun tanpa lemak yang <br />
                membuatnya lebih sehat, dan juga kacang-kacangan untuk <br />
                meningkatkan pati resisten.
              </p>
              <div class="button-like">Rp 32.000</div>
            </div>
            <div class="gambar-banner">
              <img src="asset/Image/pasta.png" width="300px" />
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <h3>Elle & Vire Yogurt <br /><br /></h3>
              <p>
                Elle & Vire memproduksi yoghurt dengan total lemak 0,1%. Meski
                <br />
                begitu, rasa yoghurt ini tetap enak karena terdapat potongan
                <br />
                buah berry di dalamnya sebagai prebiotik
              </p>
              <div class="button-like">Rp 40.000</div>
            </div>
            <div class="gambar-banner">
              <img src="asset/Image/yogurt.png" width="300px" />
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <h3>Grilled Salmon <br /><br /></h3>
              <p>
                salmon penggang disajikan dengan selada dan sayuran lainnya.
                <br />
                nikmati rasa gurih dari ikan yang segar dan rendah kalori
              </p>
              <div class="button-like">Rp 37.000</div>
            </div>
            <div class="gambar-banner">
              <img src="asset/Image/ikan.png" width="300px" />
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>

  <div class="container">
    <br /><br />
    <a name="about_us"></a>
    <div class="subjudul">
      <br />
      <font style="font-size: 29px">About Us</font><br />
      __________
    </div>
    <div class="about_us">
      <p class="copywriting">
        We are Fitmeal. From our restaurant located on Jalan
        Soehat, we offer a variety of European specialties, from various meat
        dishes to various vegetable dishes, all made with love and precision
        at affordable prices. We love to bring European flavors to you every
        day. Our flavors and portions are big but we try to keep our prices
        small. You can order from our takeaway or join us at our restaurant.
        However you order, we pride ourselves on our friendly and efficient
        service. We look forward to welcoming you to Fitmeal.
        <br /><br />
      </p>
      <img class="img-fluid" src="asset/Image/jason-leung-poI7DelFiVA-unsplash.jpg" width="400px" />
    </div>
  </div>
  <a name="menu"></a>
  <div class="menunya">
    <?php $i = 1; ?>
    <?php foreach ($dishmenu as $row) : ?>

      <div class="product-card">
        <div class="gbr">
          <img src="menu/<?php echo $row["Image"]; ?>" alt="" height="180" width="180">
        </div>
        <b><?= $row["nama"] ?></b>
        <br><br>
        <p>Rp <?= $row["harga"] ?></p>
      </div>

      <?php $i++; ?>
    <?php endforeach; ?>
    <a href="menu.php"><i class="fa-sharp fa-solid fa-circle-arrow-right"></i></a>
  </div>
  <a name="contact"></a>
  <footer>
    <div class="bawah">
      <a href="booking.php">
        <div class="button-like">Book Now</div>
      </a>

      <div class="table-information">
        <table>
          <tr>
            <td style="text-align: right; padding-right: 50px">
              restaurant open schedule :
            </td>
            <td width="50%">
              Sunday-Saturday <br />
              10:00 AM - 23:00 PM
            </td>
          </tr>
          <tr>
            <td><br /></td>
          </tr>
          <tr>
            <td style="text-align: right; padding-right: 50px">Location :</td>
            <td>
              3J38+6RJ, Jatimulyo, Kec. Lowokwaru, <br />
              Kota Malang, Jawa Timur 65141
            </td>
          </tr>
          <tr>
            <td><br /></td>
          </tr>
          <tr>
            <td style="text-align: right; padding-right: 50px">Contact :</td>
            <td>+62 813 5915 1087</td>
          </tr>
        </table>
      </div>
      <br /><br /><br />
      <h2>FOLLOW ALONG</h2>
      <div class="follow">
        <a href=""><i class="fa-brands fa-square-facebook"></i></a>
        <a href=""><i class="fa-brands fa-square-instagram"></i></a>
        <a href=""><i class="fa-brands fa-square-twitter"></i></a>
        <a href=""><i class="fa-brands fa-square-youtube"></i></a>
      </div>
      <div class="copiret">
        <br />
        <a style="color: #868686" href="">Privacy Policy</a>&nbsp &nbsp |&nbsp
        &nbsp <a style="color: #868686" href="">Imprint</a>&nbsp &nbsp |&nbsp
        &nbsp
        <a style="color: #868686" href="">Copyright 2022 &copy syrflnm_</a><br /><br />
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>