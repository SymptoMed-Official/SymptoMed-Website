<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="SymptoMed" />
  <meta name="copyright" content="SymptoMed" />
  <meta name="description" content="SymptoMed merupakan sebuah aplikasi mobile yang bertujuan untuk mendukung pelayanan kesehatan masyarakat Indonesia secara merata, mudah, mandiri serta akurat menggunakan pendekatan kecerdasan buatan (Artificial Intelligence/AI)" />
  <meta name="keywords" content="SymptoMed, Med, Symptom, Symptomed, symptomed, symptomed app, symptomed aplikasi, healthcare, kesehatan, aplikasi, mobile, android, google play, play store, google, play, store, artificial intelligence, AI, kecerdasan buatan, indonesia, indonesia, indonesia, indonesia, personal healthcare, your personal healthcare, solution, your personal healthcare solution, symptomed.id" />
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/public/home/assets/app.png">
  <link rel="stylesheet" href="<?= base_url() ?>/public/home/css/index.css" />
  <title><?= $site_title ?></title>
</head>

<body>
  <!-- HEADER -->
  <header class="header">
    <nav class="header__nav">
      <div class="container header__container">
        <!-- Logo -->
        <a href="<?= base_url() ?>">
          <img src="<?= base_url() ?>/public/home/assets/logo-company.png" alt="SymptoMed logo" class="header__logo" />
        </a>

        <!-- Header links -->
        <div class="header__links">
          <ul class="header__links-container">
            <li><a href="#" class="header__link active">Beranda</a></li>
            <li><a href="#" class="header__link" onclick="showAlert()">Penunjang kesehatan</a></li>
            <li><a href="#" class="header__link" onclick="showAlert()">Forum diskusi</a></li>
            <li><a href="#" class="header__link" onclick="showAlert()">Media edukasi</a></li>
            <li><a class="header__link" href="<?= base_url() ?>/home/contributor" >Kontributor</a></li>
            <li>
              <a href="https://play.google.com/store/apps/details?id=id.symptomed.symptomed" class="header__play-store">
                <img src="<?= base_url() ?>/public/home/assets/cta-google-play-color.svg" alt="Google Play" />
              </a>
            </li>
          </ul>
        </div>

        <!-- Header cta -->
        <a href="https://play.google.com/store/apps/details?id=id.symptomed.symptomed" class="header__play-store">
          <img src="<?= base_url() ?>/public/home/assets/cta-google-play-color.svg" alt="Google Play" />
        </a>

        <!-- Burger menu -->
        <button type="button" class="header__burger-button">
          <img src="<?= base_url() ?>/public/home/assets/icon-burger-menu.svg" alt="Mobile menu button" />
        </button>
      </div>
    </nav>
  </header>

  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <section class="hero">
      <div class="container hero__container">
        <div class="hero__copy">
          <div class="hero__text">
            <h1>
              SymptoMed, <span>your personal</span> healthcare solution!
            </h1>
            <p>Solusi kesehatan terpadu dalam genggamanmu.</p>
          </div>
          <a href="#Awal" class="button button--primary">Telusuri</a>
        </div>
        <img class="hero__img" src="<?= base_url() ?>/public/home/assets/hero-doctors.svg" alt="Illustration doctors" />
      </div>
      <div class="hero__decoration">
        <div class="hero__skew"></div>
        <img class="hero__img" src="<?= base_url() ?>/public/home/assets/hero-doctors.svg" alt="Illustration doctors" />
      </div>
    </section>

    <!-- ADVANTAGES -->
    <section class="advantages">
      <div class="container advantages__container">
        <div class="advantages__copy">
          <h2 id="Awal">
            Kenalin, SymptoMed.
            <span>Pendorong dalam pelayanan kesehatan</span>
            <span>di Indonesia.</span>
          </h2>
          <p>
            SymptoMed merupakan sebuah aplikasi mobile yang bertujuan untuk
            mendukung pelayanan kesehatan masyarakat Indonesia secara merata,
            mudah, mandiri serta akurat menggunakan pendekatan kecerdasan
            buatan (Artificial Intelligence/AI).
          </p>
        </div>
        <div class="advantages__items">
          <article class="advantages__item">
            <img src="<?= base_url() ?>/public/home/assets/advantages-kecerdasan-buatan.svg" alt="" />
            <div>
              <h3>Solusi inovatif dengan kecerdasan buatan</h3>
              <p>
                SymptoMed bisa membantu analisis gejala dan memberikan
                rekomendasi yang relevan.
              </p>
            </div>
          </article>
          <article class="advantages__item">
            <img src="<?= base_url() ?>/public/home/assets/advantages-kesehatan-cepat.svg" alt="" />
            <div>
              <h3>Tindakan <span>kesehatan cepat</span></h3>
              <p>
                Temukan fasilitas kesehatan terdekat yang dapat digunakan
                untuk tindakan darurat.
              </p>
            </div>
          </article>
          <article class="advantages__item">
            <img src="<?= base_url() ?>/public/home/assets/advantages-kualitas-pelayanan.svg" alt="" />
            <div>
              <h3>Mengubah kualitas pelayanan kesehatan</h3>
              <p>
                SymptoMed membantu meningkatkan kualitas pelayanan kesehatan
                bagi pengguna.
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- VISION & MISSION -->
    <section class="objectives">
      <div class="container objectives__container">
        <div class="objectives__copy">
          <img src="<?= base_url() ?>/public/home/assets/icon-quote-mark.svg" alt="" />
          <h2>Visi dan misi</h2>
        </div>

        <div class="objectives__group">
          <!-- Vision -->
          <article class="objectives__vision">
            <h3>Visi</h3>
            <div>
              <img src="<?= base_url() ?>/public/home/assets/icon-quote-mark.svg" alt="" />
              <p>
                Menjadi platform kesehatan digital terpercaya dan efektif bagi
                seluruh masyarakat Indonesia, dengan kemudahan akses serta
                informasi yang akurat dalam mendiagnosis gejala penyakit
                secara mandiri. Kami berkomitmen untuk mendorong kesadaran dan
                kepedulian masyarakat terhadap kesehatan individu dan sekitar.
              </p>
            </div>
          </article>

          <!-- Mission -->
          <article class="objectives__mission">
            <h3>Misi</h3>

            <div class="accordion">
              <!-- Accordion 1 -->
              <div class="accordion__item">
                <button type="button" class="accordion__button">
                  <h4 class="accordion__question">
                    Memberikan aksesibilitas pelayanan kesehatan yang lebih
                    mudah
                  </h4>
                  <div class="accordion__icon">
                    <img src="<?= base_url() ?>/public/home/assets/icon-expand.svg" alt="Expand icon" />
                    <!-- <img
                        src="<?= base_url() ?>/public/home/assets/icon-collapse.svg"
                        alt="Collapse icon"
                      /> -->
                  </div>
                </button>
                <div class="accordion__collapse">
                  <div class="accordion__body">
                    <p class="accordion__answer">
                      SymptoMed berkomitmen untuk mengatasi tantangan
                      aksesibilitas pelayanan kesehatan di Indonesia, dengan
                      menyediakan informasi medis yang akurat dan relevan
                      secara mudah bagi pengguna, memungkinkan mereka untuk
                      dengan cepat mengidentifikasi gejala dan mengambil
                      tindakan yang sesuai. Tujuan kami adalah membantu
                      mengurangi hambatan biaya dan akses dalam perawatan
                      kesehatan.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Accordion 2 -->
              <div class="accordion__item">
                <button type="button" class="accordion__button">
                  <h4 class="accordion__question">
                    Meningkatkan pemahaman masyarakat tentang perawatan
                    kesehatan
                  </h4>
                  <div class="accordion__icon">
                    <img src="<?= base_url() ?>/public/home/assets/icon-expand.svg" alt="Expand icon" />
                    <!-- <img
                        src="<?= base_url() ?>/public/home/assets/icon-collapse.svg"
                        alt="Collapse icon"
                      /> -->
                  </div>
                </button>
                <div class="accordion__collapse">
                  <div class="accordion__body">
                    <p class="accordion__answer">
                      SymptoMed berupaya meningkatkan kesadaran masyarakat
                      tentang pentingnya perawatan kesehatan dengan
                      menyediakan informasi medis yang akurat dan mudah
                      dipahami. Kami berkomitmen membantu pengguna memahami
                      gejala kesehatan mereka dengan tepat, mengidentifikasi
                      penyebab potensial, dan tindakan yang perlu diambil.
                      Tujuan kami adalah mengurangi penundaan dalam mencari
                      perawatan medis dan menghindari diagnosis mandiri yang
                      berisiko.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Accordion 3 -->
              <div class="accordion__item">
                <button type="button" class="accordion__button">
                  <h4 class="accordion__question">
                    Menyediakan solusi yang efisien dan tepat waktu
                  </h4>
                  <div class="accordion__icon">
                    <img src="<?= base_url() ?>/public/home/assets/icon-expand.svg" alt="Expand icon" />
                    <!-- <img
                        src="<?= base_url() ?>/public/home/assets/icon-collapse.svg"
                        alt="Collapse icon"
                      /> -->
                  </div>
                </button>
                <div class="accordion__collapse">
                  <div class="accordion__body">
                    <p class="accordion__answer">
                      SymptoMed bertujuan untuk memberikan solusi yang efisien
                      dan tepat waktu kepada pengguna, sehingga mereka dapat
                      segera mendapatkan perawatan dan pengobatan yang
                      dibutuhkan. Dengan demikian, SymptoMed berperan dalam
                      meningkatkan kualitas pelayanan kesehatan secara
                      keseluruhan bagi masyarakat Indonesia.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Accordion 4 -->
              <div class="accordion__item">
                <button type="button" class="accordion__button">
                  <h4 class="accordion__question">
                    Pemberdayaan pencegahan dan kesejahteraan secara
                    menyeluruh
                  </h4>
                  <div class="accordion__icon">
                    <img src="<?= base_url() ?>/public/home/assets/icon-expand.svg" alt="Expand icon" />
                    <!-- <img
                        src="<?= base_url() ?>/public/home/assets/icon-collapse.svg"
                        alt="Collapse icon"
                      /> -->
                  </div>
                </button>
                <div class="accordion__collapse">
                  <div class="accordion__body">
                    <p class="accordion__answer">
                      SymptoMed tidak hanya berfokus pada diagnosis dan
                      pengobatan, tetapi juga pada pencegahan dan
                      kesejahteraan umum. Kami ingin memberikan informasi
                      tentang nutrisi sehat, vitamin, dan gaya hidup yang
                      cocok dengan gejala yang dialami pengguna, dengan
                      harapan meningkatkan kesehatan secara keseluruhan.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Accordion 5 -->
              <div class="accordion__item">
                <button type="button" class="accordion__button">
                  <h4 class="accordion__question">Edukasi kesehatan</h4>
                  <div class="accordion__icon">
                    <img src="<?= base_url() ?>/public/home/assets/icon-expand.svg" alt="Accordion button icon" />
                  </div>
                </button>
                <div class="accordion__collapse">
                  <div class="accordion__body">
                    <p class="accordion__answer">
                      Kami berfokus pada memberikan edukasi kesehatan yang
                      mudah dimengerti oleh masyarakat, sehingga pengguna
                      dapat memahami lebih baik tentang gejala, penyakit,
                      serta langkah-langkah pencegahan yang tepat.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Accordion 6 -->
              <div class="accordion__item">
                <button type="button" class="accordion__button">
                  <h4 class="accordion__question">
                    Kemitraan dengan profesional kesehatan
                  </h4>
                  <div class="accordion__icon">
                    <img src="<?= base_url() ?>/public/home/assets/icon-expand.svg" alt="Expand icon" />
                    <!-- <img
                      src="<?= base_url() ?>/public/home/assets/icon-collapse.svg"
                      alt="Collapse icon"
                    /> -->
                  </div>
                </button>
                <div class="accordion__collapse">
                  <div class="accordion__body">
                    <p class="accordion__answer">
                      Kami akan menjalin kemitraan dengan para ahli medis dan
                      profesional kesehatan untuk memastikan bahwa rekomendasi
                      yang diberikan oleh aplikasi kami sesuai dengan standar
                      medis yang berlaku.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- FEATURES -->
    <section class="features">
      <div class="container features__container">
        <h2 id="Fitur">Kami hadir untuk menjaga kesehatanmu dalam setiap langkah.</h2>

        <div class="features__items">
          <!-- Feature 1 -->
          <article class="features__item">
            <img src="<?= base_url() ?>/public/home/assets/features-prediksi-gejala-penyakit.svg" alt="" />
            <div>
              <h3>Prediksi gejala penyakit</h3>
              <p>
                Prediksi penyakit berdasarkan gejala yang dialami dengan
                menggunakan AI.
              </p>
            </div>
          </article>

          <!-- Feature 2 -->
          <article class="features__item">
            <img src="<?= base_url() ?>/public/home/assets/features-konsultasi-medis.svg" alt="" />
            <div>
              <h3>Konsultasi medis</h3>
              <p>
                Temui dokter untuk mendapatkan pelayanan yang cepat dan tepat.
              </p>
            </div>
          </article>

          <!-- Feature 3 -->
          <article class="features__item">
            <img src="<?= base_url() ?>/public/home/assets/features-forum-diskusi.svg" alt="" />
            <div>
              <h3>Forum diskusi penyakit</h3>
              <p>
                Berbagi pengalaman terkait penyakit yang dimiliki kepada pengguna lain.
              </p>
            </div>
          </article>

          <!-- Feature 4 -->
          <article class="features__item">
            <img src="<?= base_url() ?>/public/home/assets/features-pusat-kesehatan-cepat.svg" alt="" />
            <div>
              <h3>Pusat kesehatan cepat</h3>
              <p>
                Akses kontak darurat atau temukan fasilitas kesehatan terdekat segera.
              </p>
            </div>
          </article>

          <!-- Feature 5 -->
          <article class="features__item">
            <img src="<?= base_url() ?>/public/home/assets/features-penunjang-kesehatan.svg" alt="" />
            <div>
              <h3>Penunjang kesehatan</h3>
              <p>
                Hitung BMI, kalender menstruasi, dan berbagai layanan lain yang bermanfaat.
              </p>
            </div>
          </article>

          <!-- Feature 6 -->
          <article class="features__item">
            <img src="<?= base_url() ?>/public/home/assets/features-media-edukasi.svg" alt="" />
            <div>
              <h3>Media edukasi</h3>
              <p>
                Edukasi kesehatan dengan menyajikan informasi terkini seputar
                isu kesehatan.
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- TEAM -->
    <section class="team">
      <div class="container team__container">
        <h2 id="Tentang_Kami">Team Kami</h2>

        <div class="team__company">
          <div class="team__actions">
            <button type="button" id="staff-prev-btn">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_964_17215" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="5" y="0" width="14" height="24">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5484 0.939574C19.1505 1.52535 19.1505 2.47507 18.5484 3.06084L9.36091 12L18.5484 20.9391C19.1505 21.5249 19.1505 22.4746 18.5484 23.0604C17.9464 23.6462 16.9702 23.6462 16.3682 23.0604L5.00049 12L16.3682 0.939574C16.9702 0.353801 17.9464 0.353801 18.5484 0.939574Z" fill="#1688E8" />
                </mask>
                <g mask="url(#mask0_964_17215)">
                  <rect x="0.000488281" y="-0.00170898" width="23.9991" height="23.9994" />
                </g>
              </svg>
            </button>
            <button class="active" type="button" id="staff-next-btn">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_964_17217" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="5" y="0" width="14" height="24">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M5.45184 0.939574C4.84979 1.52535 4.84979 2.47507 5.45184 3.06084L14.6393 12L5.45184 20.9391C4.84979 21.5249 4.84979 22.4746 5.45184 23.0604C6.05389 23.6462 7.03 23.6462 7.63205 23.0604L18.9998 12L7.63205 0.939574C7.03 0.353801 6.05389 0.353801 5.45184 0.939574Z" fill="#1688E8" />
                </mask>
                <g mask="url(#mask0_964_17217)">
                  <rect x="0.000488281" y="-0.00170898" width="23.9991" height="23.9994" />
                </g>
              </svg>
            </button>
          </div>
          <div class="team__staffs">
            <!-- Core 1 -->
            <div class="team__staff active">
              <div class="team__staff-info">
                <span>CEO & ML RESEARCHER</span>
                <p>Rio Bastian</p>
              </div>
              <img src="<?= base_url() ?>/public/home/assets/Rio.png" alt="Rio Bastian" />
            </div>

            <!-- Core 2 -->
            <div class="team__staff">
              <div class="team__staff-info">
                <span>CTO &amp; Back-End Engineer</span>
                <p>Arizki Putra Rahman</p>
              </div>
              <img src="<?= base_url() ?>/public/home/assets/Arizkinobg.png" alt="Arizky Putra Rahman" />
            </div>

            <!-- Core 3 -->
            <div class="team__staff">
              <div class="team__staff-info">
                <span>CTO & ML RESEARCHER</span>
                <p>Fauzan Nauvally R.M.</p>
              </div>
              <img src="<?= base_url() ?>/public/home/assets/Fauzan.png" alt="Fauzan Nauvally Rizky Muhamad" />
            </div>

            <!-- Core 4 -->
            <div class="team__staff">
              <div class="team__staff-info">
                <span>CLO &amp; MOBILE DEVELOPER</span>
                <p>Arizona Adi Pradana</p>
              </div>
              <img src="<?= base_url() ?>/public/home/assets/Ari.png" alt="Arizona Adi Pradana" />
            </div>

            <!-- Core 5 -->
            <div class="team__staff">
              <div class="team__staff-info">
                <span>CCO &amp; Web Developer</span>
                <p>Ilmi Fatha Nur Ihsan</p>
              </div>
              <img src="<?= base_url() ?>/public/home/assets/Ilmi.png" alt="Ilmi Fatha Nur Ihsan" />
            </div>

            <!-- Core 6 -->
            <div class="team__staff">
              <div class="team__staff-info">
                <span>CFO &amp; Web Developer</span>
                <p>Jhonson Saputra</p>
              </div>
              <img src="<?= base_url() ?>/public/home/assets/Joni.png" alt="Jhonson Saputra" />
            </div>
          </div>
        </div>

        <div class="people team__doctors">

          <!-- CC1  -->
          <div class="people__person">
            <img src="<?= base_url() ?>/public/home/assets/alip.png" alt="Alif Maulidanar" />
            <div class="people__person-info">
              <h3>Alif Maulidanar</h3>
              <span>Dev Ops & Back-End Engineer</span>
            </div>
          </div>

          <!-- CC2 -->
          <div class="people__person">
            <img src="<?= base_url() ?>/public/home/assets/rama.png" alt="Ramadhana Noor" />
            <div class="people__person-info">
              <h3>Ramadhana Noor S.W.</h3>
              <span>ML Researcher & Software Developer</span>
            </div>
          </div>

          <!-- MD1 -->
          <div class="people__person">
            <img src="<?= base_url() ?>/public/home/assets/fariz.png" alt="Fariz Hustha" />
            <div class="people__person-info">
              <h3>Fariz Hustha</h3>
              <span>Lead Mobile Developer</span>
            </div>
          </div>

          <!-- MM1 -->
          <div class="people__person">
            <img src="<?= base_url() ?>/public/home/assets/Nadia.png" alt="Nadia Sahda C." />
            <div class="people__person-info">
              <h3>Nadia Sahda C.</h3>
              <span>Graphic Designer & Lead Multimedia</span>
            </div>
          </div>


          <!-- MM2 -->
          <div class="people__person">
            <img src="<?= base_url() ?>/public/home/assets/lala.png" alt="Nabila Adristi P." />
            <div class="people__person-info">
              <h3>Nabila Adristi P.</h3>
              <span>Content Writter & Multimedia</span>
            </div>
          </div>


        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta">
      <div class="cta__copy-container">
        <div class="container cta__copy">
          <h2>Belum punya aplikasi SymptoMed? Yuk, unduh sekarang.</h2>
          <p>
            Dapatkan yang terbaik dari SymptoMed dan nikmati akses ke
            fitur-fitur terlengkap.
          </p>
          <a href="https://play.google.com/store/apps/details?id=id.symptomed.symptomed">
            <img src="<?= base_url() ?>/public/home/assets/cta-google-play-color.svg" alt="Get on Google Play icon" />
          </a>
        </div>
      </div>
      <div class="cta__app-preview">
        <img src="<?= base_url() ?>/public/home/assets/cta-mobile-app-preview.png" alt="SymptoMed mobile app preview" />
      </div>
    </section>

    <!-- SLOGAN -->
    <section class="slogan">
      <div class="container slogan__container">
        <h3>Bersama <span>#SymptoMed</span>, jalani hidup sehatmu!</h3>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
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
	          <li><a class="footer__link" href="<?= base_url() ?>/home/ketentuan">Kebijakan dan Ketentuan</a></li>
	          <li><a class="footer__link" href="<?= base_url() ?>/home/Privacy">Privacy Policy</a></li>
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
