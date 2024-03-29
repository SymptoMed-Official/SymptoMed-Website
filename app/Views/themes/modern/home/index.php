<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>/public/landing-page/public/assets/app.png">
    <meta name="author" content="SymptoMed" />
    <meta
      name="description"
      content="SymptoMed merupakan sebuah aplikasi mobile yang bertujuan untuk mendukung pelayanan kesehatan masyarakat Indonesia secara merata, mudah, mandiri serta akurat menggunakan pendekatan kecerdasan buatan (Artificial Intelligence/AI)"
    />
    <meta
      name="keywords"
      content="SymptoMed, Med, Symptom, Symptomed, symptomed, symptomed app, symptomed aplikasi, healthcare, kesehatan, aplikasi, mobile, android, google play, play store, google, play, store, artificial intelligence, AI, kecerdasan buatan, indonesia, indonesia, indonesia, indonesia, personal healthcare, your personal healthcare, solution, your personal healthcare solution, symptomed.id"
    />
    <link rel="stylesheet" href="<?=base_url()?>/public/landing-page/public/css/index.css" />
    <title>SymptoMed</title>
  </head>
  <body>
    <!-- HEADER -->
    <header class="header">
      <nav class="header__nav">
        <div class="container header__container">
          <!-- Logo -->
          <a href="#">
            <img
              src="<?=base_url()?>/public/landing-page/public/assets/logo-company.png"
              alt="SymptoMed logo"
              class="header__logo"
            />
          </a>

          <!-- Header links -->
          <div class="header__links">
            <ul class="header__links-container">
              <li><a href="#" class="header__link active">Beranda</a></li>
              <li><a href="#" class="header__link" onclick="showAlert()">Penunjang kesehatan</a></li>
              <li><a href="#" class="header__link" onclick="showAlert()">Forum diskusi</a></li>
              <li><a href="#" class="header__link" onclick="showAlert()">Media edukasi</a></li>
              <li>
                <a href="https://play.google.com/store/apps/details?id=com.symptomed.symptomed" class="header__play-store">
                  <img
                    src="<?=base_url()?>/public/landing-page/public/assets/cta-google-play-color.svg"
                    alt="Google Play"
                  />
                </a>
              </li>
            </ul>
          </div>

          <!-- Header cta -->
          <a href="https://play.google.com/store/apps/details?id=com.symptomed.symptomed" class="header__play-store">
            <img src="<?=base_url()?>/public/landing-page/public/assets/cta-google-play-color.svg" alt="Google Play" />
          </a>

          <!-- Burger menu -->
          <button type="button" class="header__burger-button">
            <img src="<?=base_url()?>/public/landing-page/public/assets/icon-burger-menu.svg" alt="Mobile menu button" />
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
          <img
            class="hero__img"
            src="<?=base_url()?>/public/landing-page/public/assets/hero-doctors.svg"
            alt="Illustration doctors"
          />
        </div>
        <div class="hero__decoration">
          <div class="hero__skew"></div>
          <img
            class="hero__img"
            src="<?=base_url()?>/public/landing-page/public/assets/hero-doctors.svg"
            alt="Illustration doctors"
          />
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
              <img src="<?=base_url()?>/public/landing-page/public/assets/advantages-kecerdasan-buatan.svg" alt="" />
              <div>
                <h3>Solusi inovatif dengan kecerdasan buatan</h3>
                <p>
                  SymptoMed bisa membantu analisis gejala dan memberikan
                  rekomendasi yang relevan.
                </p>
              </div>
            </article>
            <article class="advantages__item">
              <img src="<?=base_url()?>/public/landing-page/public/assets/advantages-kesehatan-cepat.svg" alt="" />
              <div>
                <h3>Tindakan <span>kesehatan cepat</span></h3>
                <p>
                  Temukan fasilitas kesehatan terdekat yang dapat digunakan
                  untuk tindakan darurat.
                </p>
              </div>
            </article>
            <article class="advantages__item">
              <img src="<?=base_url()?>/public/landing-page/public/assets/advantages-kualitas-pelayanan.svg" alt="" />
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
            <img src="<?=base_url()?>/public/landing-page/public/assets/icon-quote-mark.svg" alt="" />
            <h2>Visi dan misi</h2>
          </div>

          <div class="objectives__group">
            <!-- Vision -->
            <article class="objectives__vision">
              <h3>Visi</h3>
              <div>
                <img src="<?=base_url()?>/public/landing-page/public/assets/icon-quote-mark.svg" alt="" />
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
                      <img src="<?=base_url()?>/public/landing-page/public/assets/icon-expand.svg" alt="Expand icon" />
                      <!-- <img
                        src="<?=base_url()?>/public/landing-page/public/assets/icon-collapse.svg"
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
                      <img src="<?=base_url()?>/public/landing-page/public/assets/icon-expand.svg" alt="Expand icon" />
                      <!-- <img
                        src="<?=base_url()?>/public/landing-page/public/assets/icon-collapse.svg"
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
                      <img src="<?=base_url()?>/public/landing-page/public/assets/icon-expand.svg" alt="Expand icon" />
                      <!-- <img
                        src="<?=base_url()?>/public/landing-page/public/assets/icon-collapse.svg"
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
                      <img src="<?=base_url()?>/public/landing-page/public/assets/icon-expand.svg" alt="Expand icon" />
                      <!-- <img
                        src="<?=base_url()?>/public/landing-page/public/assets/icon-collapse.svg"
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
                      <img
                        src="<?=base_url()?>/public/landing-page/public/assets/icon-expand.svg"
                        alt="Accordion button icon"
                      />
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
                      <img src="<?=base_url()?>/public/landing-page/public/assets/icon-expand.svg" alt="Expand icon" />
                      <!-- <img
                      src="<?=base_url()?>/public/landing-page/public/assets/icon-collapse.svg"
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
              <img
                src="<?=base_url()?>/public/landing-page/public/assets/features-prediksi-gejala-penyakit.svg"
                alt=""
              />
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
              <img src="<?=base_url()?>/public/landing-page/public/assets/features-konsultasi-medis.svg" alt="" />
              <div>
                <h3>Konsultasi medis</h3>
                <p>
                  Temui dokter untuk mendapatkan pelayanan yang cepat dan tepat.
                </p>
              </div>
            </article>

            <!-- Feature 3 -->
            <article class="features__item">
              <img src="<?=base_url()?>/public/landing-page/public/assets/features-forum-diskusi.svg" alt="" />
              <div>
                <h3>Forum diskusi penyakit</h3>
                <p>
                  Berbagi pengalaman terkait penyakit yang dimiliki kepada
                  pengguna lain.
                </p>
              </div>
            </article>

            <!-- Feature 4 -->
            <article class="features__item">
              <img src="<?=base_url()?>/public/landing-page/public/assets/features-pusat-kesehatan-cepat.svg" alt="" />
              <div>
                <h3>Pusat kesehatan cepat</h3>
                <p>
                  Akses kontak darurat atau temukan fasilitas kesehatan terdekat
                  segera.
                </p>
              </div>
            </article>

            <!-- Feature 5 -->
            <article class="features__item">
              <img src="<?=base_url()?>/public/landing-page/public/assets/features-penunjang-kesehatan.svg" alt="" />
              <div>
                <h3>Penunjang kesehatan</h3>
                <p>
                  Hitung BMI, kalender menstruasi, dan berbagai layanan lain
                  yang bermanfaat.
                </p>
              </div>
            </article>

            <!-- Feature 6 -->
            <article class="features__item">
              <img src="<?=base_url()?>/public/landing-page/public/assets/features-media-edukasi.svg" alt="" />
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
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <mask
                    id="mask0_964_17215"
                    style="mask-type: alpha"
                    maskUnits="userSpaceOnUse"
                    x="5"
                    y="0"
                    width="14"
                    height="24"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M18.5484 0.939574C19.1505 1.52535 19.1505 2.47507 18.5484 3.06084L9.36091 12L18.5484 20.9391C19.1505 21.5249 19.1505 22.4746 18.5484 23.0604C17.9464 23.6462 16.9702 23.6462 16.3682 23.0604L5.00049 12L16.3682 0.939574C16.9702 0.353801 17.9464 0.353801 18.5484 0.939574Z"
                      fill="#1688E8"
                    />
                  </mask>
                  <g mask="url(#mask0_964_17215)">
                    <rect
                      x="0.000488281"
                      y="-0.00170898"
                      width="23.9991"
                      height="23.9994"
                    />
                  </g>
                </svg>
              </button>
              <button class="active" type="button" id="staff-next-btn">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <mask
                    id="mask0_964_17217"
                    style="mask-type: alpha"
                    maskUnits="userSpaceOnUse"
                    x="5"
                    y="0"
                    width="14"
                    height="24"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M5.45184 0.939574C4.84979 1.52535 4.84979 2.47507 5.45184 3.06084L14.6393 12L5.45184 20.9391C4.84979 21.5249 4.84979 22.4746 5.45184 23.0604C6.05389 23.6462 7.03 23.6462 7.63205 23.0604L18.9998 12L7.63205 0.939574C7.03 0.353801 6.05389 0.353801 5.45184 0.939574Z"
                      fill="#1688E8"
                    />
                  </mask>
                  <g mask="url(#mask0_964_17217)">
                    <rect
                      x="0.000488281"
                      y="-0.00170898"
                      width="23.9991"
                      height="23.9994"
                    />
                  </g>
                </svg>
              </button>
            </div>
            <div class="team__staffs">
              <!-- Team staff 1 -->
              <div class="team__staff active">
                <div class="team__staff-info">
                  <span>CEO & ML RESEARCHER</span>
                  <p>Rio Bastian</p>
                </div>
                <img src="<?=base_url()?>/public/landing-page/public/assets/Rio.png" alt="Rio Bastian" />
              </div>

              <!-- Team staff 2 -->
              <div class="team__staff">
                <div class="team__staff-info">
                  <span>COO & ML RESEARCHER</span>
                  <p>Anugrah Cahya Kautsar</p>
                </div>
                <img src="<?=base_url()?>/public/landing-page/public/assets/Anu.png" alt="Anugrah Cahya Kautsar" />
              </div>

              <!-- Team staff 3 -->
              <div class="team__staff">
                <div class="team__staff-info">
                  <span>CTO & ML RESEARCHER</span>
                  <p>Fauzan Nauvally R.M.</p>
                </div>
                <img src="<?=base_url()?>/public/landing-page/public/assets/Fauzan.png" alt="Fauzan Nauvally Rizky Muhamad" />
              </div>

              <!-- Team staff 4 -->
              <div class="team__staff">
                <div class="team__staff-info">
                  <span>CLO & MOBILE DEVELOPER</span>
                  <p>Arizona Adi Pradana</p>
                </div>
                <img src="<?=base_url()?>/public/landing-page/public/assets/Ari.png" alt="Arizona Adi Pradana" />
              </div>

              <!-- Team staff 5 -->
              <div class="team__staff">
                <div class="team__staff-info">
                  <span>CMO & CLOUD COMPUTING</span>
                  <p>Ilmi Fatha Nur Ihsan</p>
                </div>
                <img src="<?=base_url()?>/public/landing-page/public/assets/Ilmi.png" alt="Ilmi Fatha Nur Ihsan" />
              </div>

              <!-- Team staff 6 -->
              <div class="team__staff">
                <div class="team__staff-info">
                  <span>CFO & CLOUD COMPUTING</span>
                  <p>Jhonson Saputra</p>
                </div>
                <img src="<?=base_url()?>/public/landing-page/public/assets/Joni.png" alt="Jhonson Saputra" />
              </div>
            </div>
          </div>

          <div class="people team__doctors">
            <!-- Team doctor 1 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/arizki.png" alt="Arizki Putra Rahman" />
              <div class="people__person-info">
                <h3>Arizki Putra Rahman</h3>
                <span>Back-End Engineer</span>
              </div>
            </div>

            <!-- Team doctor 2 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/alip.png" alt="Alif Maulidanar" />
              <div class="people__person-info">
                <h3>Alif Maulidanar</h3>
                <span>Back-End Engineer</span>
              </div>
            </div>

            <!-- Team doctor 3 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/rama.png" alt="Ramadhana Noor" />
              <div class="people__person-info">
                <h3>Ramadhana Noor S.W.</h3>
                <span>ML Researcher</span>
              </div>
            </div>

            <!-- Team doctor 4 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/fariz.png" alt="Fariz Hustha" />
              <div class="people__person-info">
                <h3>Fariz Hustha</h3> 
                <span>Mobile Developer</span>
              </div>
            </div>

            <!-- Team doctor 5 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/bintang.png" alt="M.Bintang Khadafi" />
              <div class="people__person-info">
                <h3>M. Bintang Khadafi</h3>
                <span>Mobile Developer</span>
              </div>
            </div>


            <!-- Team doctor 6 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/pincen.png" alt="Vinsensius Adrian" />
              <div class="people__person-info">
                <h3>Vinsensius Adrian</h3>
                <span>Mobile Developer</span>
              </div>
            </div>

            <!-- Team doctor 7 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/Nadia.png" alt="Nadia Sahda C." />
              <div class="people__person-info">
                <h3>Nadia Sahda C.</h3>
                <span>Marketing & Social Media</span>
              </div>
            </div>

            <!-- Team doctor 8 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/nisa.png" alt="Nisa Ulayya M." />
              <div class="people__person-info">
                <h3>Nisa Ulayya M.</h3>
                <span>Marketing & Social Media</span>
              </div>
            </div>

            <!-- Team doctor 9 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/nurul.png" alt="Nurul Salsabila" />
              <div class="people__person-info">
                <h3>Nurul Salsabila</h3>
                <span>Marketing & Social Media</span>
              </div>
            </div>

            <!-- Team doctor 10 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/tasya.png" alt="Tasya Puspita A." />
              <div class="people__person-info">
                <h3>Tasya Puspa A.</h3>
                <span>Marketing & Social Media</span>
              </div>
            </div>


          </div>
        </div>
      </section>

      <!-- SUPPORTED BY -->
      <section class="supportedBy">
        <div class="container supportedBy__container">
          <h2 id="Partner">SymptoMed juga didukung oleh...</h2>

          <div class="people supportedBy__supporters">
            <!-- Supporter 1 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/pak_guntur.png" alt="Guntur Eka Saputra" />
              <div class="people__person-info">
                <h3>Guntur Eka Saputra</h3>
                <span>Dosen Advisor</span>
              </div>
            </div>

            <!-- Supporter 2 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/kak_ara.png" alt="Mutiara Arumsari" />
              <div class="people__person-info">
                <h3>Mutiara Arumasri</h3>
                <span>Mentor & Advisor Bangkit</span>
              </div>
            </div>

            <!-- Supporter 3 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/dr_evi.png" alt="Evi Maryam" />
              <div class="people__person-info">
                <h3>Evi Maryam</h3>
                <span>Health Advisor</span>
              </div>
            </div>

            <!-- Supporter 4 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/bu_dinik.png" alt="Dinik Fitri R.P." />
              <div class="people__person-info">
                <h3>Dinik Fitri Rahajeng P.</h3>
                <span>Business Advisor</span>
              </div>
            </div>

            <!-- Supporter 5 -->
            <div class="people__person">
              <img src="<?=base_url()?>/public/landing-page/public/assets/pak_kevin.png" alt="Niki Zefanya" />
              <div class="people__person-info">
                <h3>Kevin Filmawan</h3>
                <span>Tech Advisor</span>
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
            <a href="https://play.google.com/store/apps/details?id=com.symptomed.symptomed">
              <img
                src="<?=base_url()?>/public/landing-page/public/assets/cta-google-play-color.svg"
                alt="Get on Google Play icon"
              />
            </a>
          </div>
        </div>
        <div class="cta__app-preview">
          <img
            src="<?=base_url()?>/public/landing-page/public/assets/cta-mobile-app-preview.png"
            alt="SymptoMed mobile app preview"
          />
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
          <img
            src="<?=base_url()?>/public/landing-page/public/assets/logo-company.png"
            alt="SymptoMed logo"
            class="footer__logo"
          />
          <p class="footer__copyright">
            &copy; 2023 SymptoMed. SymptoMed adalah merek milik<br>PT. Symptomedica Prima SolusIndo.
            <!-- Terdaftar pada ABC. -->
          </p>
          <div class="footer__supporters">
            <p>Didukung oleh:</p>
            <ul>
              <li>
                <img src="<?=base_url()?>/public/landing-page/public/assets/logo-bangkit.png" alt="Bangkit logo" />
              </li>
              <li>
                <img src="<?=base_url()?>/public/landing-page/public/assets/logo-google.png" alt="Google logo" />
              </li>
              <li>
                <img
                  src="<?=base_url()?>/public/landing-page/public/assets/logo-ristekdikti.png"
                  alt="Ristekdikti logo"
                />
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
              <li><a href="#" class="footer__link">Pusat bantuan</a></li>
              <li><a href="#" class="footer__link">Syarat dan ketentuan</a></li>
              <li>
                <a href="#" class="footer__link">Pemberitahuan privasi</a>
              </li>
              <li><a href="#" class="footer__link">Atribusi data</a></li>
              <li><a href="#" class="footer__link">Pengaturan cookie</a></li>
            </ul>
          </div>

          <!-- links group 3 -->
          <div class="footer__links-group">
            <h5>Hubungi kami</h5>
            <ul>
              <li><a href="#" class="footer__link">Website</a></li>
              <li>
                <a
                  href="https://www.facebook.com/profile.php?id=61550849998188"
                  class="footer__link"
                  >Facebook</a
                >
              </li>
              <li><a href="https://www.tiktok.com/@symptomed.id" class="footer__link">TikTok</a></li>
              <li>
                <a
                  href="https://www.instagram.com/symptomed.id/"
                  class="footer__link"
                  >Instagram</a
                >
              </li>
              <li>
                <a
                  href="https://www.linkedin.com/company/symptomed"
                  class="footer__link"
                  >LinkedIn</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="<?=base_url()?>/public/landing-page/public/app/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
