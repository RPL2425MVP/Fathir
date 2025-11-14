<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik keluarga</title>
    <link rel="stylesheet" href="Asset/CSS/style">
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
/>
    <style>
      html {
     scroll-behavior: smooth;
      }
    </style>
</head>
<body>

  <header>
    <h1>KK</h1>
    <nav>
      <a href="#Home">Home</a>
      <a href="#Product">Product</a>
      <a href="#">Contact</a>
      <a href="#Service">Service</a>
    </nav>
      <a href="Login.php" class="login">Login</a>
  </header>

  <section class="hero">
    <div class="hero-text" id="Home">
      <h2>Bersama <strong>Klinik Keluarga Sehat</strong></h2>
      <p>
        Kesehatan bukan hanya untuk pribadi, tapi juga untuk bersama.
        Klinik keluarga siap membantu tiap keluarga yang ingin sehat.
      </p>
      <button>Book Now</button>
    </div>
    <div class="hero-images">
      <img src="img/DK/DK_05 1.png" alt="Dokter 1" />
      <img src="img/Dk/DK_04 1.png" alt="Dokter 2" />
    </div>
  </section>

  <section class="stats">
    <div>
      <h3>1200+</h3>
      <p>Pasien dilayani</p>
    </div>
    <div>
      <h3>90%</h3>
      <p>Penilaian pasien</p>
    </div>
    <div>
      <h3>60+</h3>
      <p>Dokter ahli</p>
    </div>
  </section>

  <div class="product" id="Product">
  <div class="beli-obat-di-apoteker-kita">
    <span class="beli-obat-di-apoteker-kita-span">Beli obat di </span>
    <span class="beli-obat-di-apoteker-kita-span3">Apoteker </span>
    <span class="beli-obat-di-apoteker-kita-span">kita</span>
  </div>

  <div class="product-grid">
    <!-- Produk 1 -->
    <div class="product-card">
      <img src="img/OBT/OBT_01 1.png" alt="Ranitidine HCL" class="obt-01-1" />
      <h3>Ranitidine HCL</h3>
      <p>Stok: 12</p>
      <button>Beli</button>
    </div>

    <!-- Produk 2 -->
    <div class="product-card">
      <img src="img/OBT/OBT_03 1.png" alt="AcetaZOLAMIDE TABLETS, USP" class="obt-03-1" />
      <h3>AcetaZOLAMIDE TABLETS, USP</h3>
      <p>Stok: 7</p>
      <button>Beli</button>
    </div>

    <!-- Produk 3 -->
    <div class="product-card">
      <img src="img/OBT/OBT_04 1.png" alt="Abacavir Tablets, USP" class="obt-04-1" />
      <h3>Abacavir Tablets, USP</h3>
      <p>Stok: 15</p>
      <button>Beli</button>
    </div>
  </div>
</div>

<!--Doctor -->
<section class="service" id="Service">
  <div class="doctor-di-klinik-kami" >Doctor di Klinik Kami</div>
  <div class="pelayanan-yang-kami-sediakan" >
    Pelayanan yang<br />kami sediakan
  </div>

  <div class="service-grid">
    <!-- Dokter 1 -->
    <div class="doctor-card">
      <img src="img/DK/DK_01 1.png" alt="Dr. Susan Hari" />
      <h4>Dr.Susan Hari</h4>
      <p>Spesialis gigi</p>
    </div>

    <!-- Dokter 2 -->
    <div class="doctor-card">
      <img src="img/DK/DK_02 1.png" alt="Dr. Amba Shing" />
      <h4>Dr.Amba Shing</h4>
      <p>Spesialis jantung</p>
    </div>

    <!-- Dokter 3 -->
    <div class="doctor-card">
      <img src="img/DK/DK_03 1.png" alt="Dr. Mona Nona" />
      <h4>Dr.Mona Nona</h4>
      <p>Spesialis paru</p>
    </div>

    <!-- Dokter 4 -->
    <!--<div class="doctor-card">
      <img src="DK/DK_04 2.png" alt="Dr. Fitri Angreani" />
      <h4>Dr.Fitri Angreani</h4>
      <p>Spesialis anak</p>
    </div>
  </div>-->
</section>

<!--Review-->
<section class="review">
  <div class="_1200-reviws">
    <span class="_1200-reviws-span">1200+</span>
    <span class="_1200-reviws-span2"> Reviews</span>
  </div>

  <div class="review-grid">
    <!-- Review 1 -->
    <div class="review-card">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p class="testimonial">
        Seru banget di klinik ini, dokter nya sangat ramah. Dokter Susan baik banget, nyabut gigi gak sakit dan ramah.
      </p>
      <div class="reviewer">Sapidermen</div>
    </div>

    <!-- Review 2 -->
    <div class="review-card">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <p class="testimonial">
        Seru banget di klinik ini, dokter nya sangat ramah. Dokter Susan baik banget, nyabut gigi gak sakit dan ramah.
      </p>
      <div class="reviewer">Supartman</div>
    </div>

    <!-- Review 3 -->
    <div class="review-card">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <p class="testimonial">
        Seru banget di klinik ini, dokter nya sangat ramah. Dokter Susan baik banget, nyabut gigi gak sakit dan ramah.
      </p>
      <div class="reviewer">Yani</div>
    </div>

    <!-- Review 4 -->
    <div class="review-card">
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <p class="testimonial">
        Seru banget di klinik ini, dokter nya sangat ramah. Dokter Susan baik banget, nyabut gigi gak sakit dan ramah.
      </p>
      <div class="reviewer">Huda</div>
    </div>
  </div>
</section>

<!--Footer-->
<footer class="footer">
  <div class="footer-container">
    <!-- Logo / Nama Klinik -->
    <div class="footer-logo">
      <h3>Klinik Keluarga Sehat</h3>
    </div>


    <!-- Alamat & Kontak -->
    <div class="footer-contact">
      <p>Jl. Sehat No. 123, Jakarta</p>
      <p>Email: info@kliniksehat.com</p>
      <p>Telp: +62 812 3456 7890</p>
    </div>

    <!-- Sosial Media (opsional) -->
    <div class="footer-social">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
  </div>

  <div class="footer-bottom">
    &copy; 2025 Klinik Keluarga Sehat. All Rights Reserved.
  </div>
</footer>

<script src="Asset/JS/script.js"></script>
</body>

</html>