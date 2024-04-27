<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/public/home/assets/app.png">
  <meta name="description" content="SymptoMed merupakan sebuah aplikasi mobile yang bertujuan untuk mendukung pelayanan kesehatan masyarakat Indonesia secara merata, mudah, mandiri serta akurat menggunakan pendekatan kecerdasan buatan (Artificial Intelligence/AI)" />
  <meta name="keywords" content="SymptoMed, Med, Symptom, Symptomed, symptomed, symptomed app, symptomed aplikasi, healthcare, kesehatan, aplikasi, mobile, android, google play, play store, google, play, store, artificial intelligence, AI, kecerdasan buatan, indonesia, indonesia, indonesia, indonesia, personal healthcare, your personal healthcare, solution, your personal healthcare solution, symptomed.id" />
  <link rel="stylesheet" href="<?= base_url() ?>/public/home/css/index.css" />
  <title><?= $site_title ?></title>
</head>

<body>

  <!-- HEADER -->
  <header class="header">
    <nav class="header__nav">
      <div class="container header__container">
        <!-- Logo -->
        <a href="#">
          <img src="<?= base_url() ?>/public/home/assets/logo-company.png" alt="SymptoMed logo" class="header__logo" />
        </a>

        <!-- Header links -->
        <div class="header__links">
          <ul class="header__links-container">
            <li><a href="#" class="header__link active">Beranda</a></li>
            <li><a href="#" class="header__link" onclick="showAlert()">Penunjang kesehatan</a></li>
            <li><a href="#" class="header__link" onclick="showAlert()">Forum diskusi</a></li>
            <li><a href="#" class="header__link" onclick="showAlert()">Media edukasi</a></li>
            <li><a class="header__link" href="Contributor.php">Kontributor</a></li>
            <li>
              <a href="https://play.google.com/store/apps/details?id=com.symptomed.symptomed" class="header__play-store">
                <img src="<?= base_url() ?>/public/home/assets/cta-google-play-color.svg" alt="Google Play" />
              </a>
            </li>
          </ul>
        </div>

        <!-- Header cta -->
        <a href="https://play.google.com/store/apps/details?id=com.symptomed.symptomed" class="header__play-store">
          <img src="<?= base_url() ?>/public/home/assets/cta-google-play-color.svg" alt="Google Play" />
        </a>

        <!-- Burger menu -->
        <button type="button" class="header__burger-button">
          <img src="<?= base_url() ?>/public/home/assets/icon-burger-menu.svg" alt="Mobile menu button" />
        </button>
      </div>
    </nav>
  </header>

  <!-- CODE HERE -->



  <footer class="footer">
    <div class="container footer__container">
      <div class="footer__company">
        <img src="<?= base_url() ?>/public/home/assets/logo-company.png" alt="SymptoMed logo" class="footer__logo" />
        <p class="footer__copyright">
          &copy; 2023 SymptoMed. SymptoMed adalah merek milik<br>PT. Symptomedica Prima SolusIndo.
          <!-- Terdaftar pada ABC. -->
        </p>
        <div class="footer__supporters">
          <p>Didukung oleh:</p>
          <ul>
            <li>
              <img src="<?= base_url() ?>/public/home/assets/logo-bangkit.png" alt="Bangkit logo" />
            </li>
            <li>
              <img src="<?= base_url() ?>/public/home/assets/logo-google.png" alt="Google logo" />
            </li>
            <li>
              <img src="<?= base_url() ?>/public/home/assets/logo-ristekdikti.png" alt="Ristekdikti logo" />
            </li>
          </ul>
        </div>
      </div>

      <div class="footer__links">
        <!-- Links grop 1 -->
        <div class="footer__links-group">
          <h5>Perusahaan</h5>
          <ul>
            <li><a href="#Tentang_Kami" class="footer__link">Tentang</a></li>
            <li><a href="#Fitur" class="footer__link">Fitur</a></li>
            <li><a href="#Partner" class="footer__link">Partner</a></li>
          </ul>
        </div>

        <!-- Links group 2 -->
        <div class="footer__links-group">
          <h5>Dukungan</h5>
          <ul>
            <li><a class="footer__link" href="#">Pusat bantuan</a></li>
            <li><a class="footer__link" href="./Ketentuan.php">Kebijakan dan Ketentuan</a></li>
            <li><a class="footer__link" href="./Privacy.php">Privacy Policy</a></li>
            <li><a class="footer__link" href="#">Atribusi data</a></li>
            <li><a class="footer__link" href="#">Pengaturan cookie</a></li>
          </ul>
        </div>

        <!-- links group 3 -->
        <div class="footer__links-group">
          <h5>Hubungi kami</h5>
          <ul>
            <li><a href="#" class="footer__link">Website</a></li>
            <li>
              <a href="https://www.facebook.com/profile.php?id=61550849998188" class="footer__link">Facebook</a>
            </li>
            <li><a href="https://www.tiktok.com/@symptomed.id" class="footer__link">TikTok</a></li>
            <li>
              <a href="https://www.instagram.com/symptomed.id/" class="footer__link">Instagram</a>
            </li>
            <li>
              <a href="https://www.linkedin.com/company/symptomed" class="footer__link">LinkedIn</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="<?= base_url() ?>/public/home/app/js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>