<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap CDN -->

    <!-- Google API -->
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit :wght@300;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Round"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Google API -->
    <link rel="stylesheet" href="css/user/faq.css" />
    <title>Frequently Asked Question</title>
  </head>
  <body>
    <section class="header d-flex justify-content-between align-items-center">
      <div class="logo">
        <img src="/img/logo.png" width="95px" alt="" />
      </div>
      <div class="login">
        <a href="" class="link-login">
          <button class="btn btn-outline-primary d-flex justify-content-center">
            Login
          </button>
        </a>
      </div>
    </section>

    <!-- Body -->
    <main class="main">
      <div class="row px-4">
        <div class="col-lg-7 d-flex flex-column justify-content-center">
          <h4 class="the-faq">The FAQs</h4>
          <h1 class="pusat-bantuan">Pusat Bantuan</h1>
          <p class="detail">
            Halaman ini berisi seluruh informasi mengenai pertanyaan yang sering
            diajukan. Pada halaman ini pula berisi tata cara penggunaan aplikasi
            SIFA Digital Library (SIFALIB).
          </p>
        </div>
        <div
          class="col-lg-5 d-flex justify-content-end align-items-center faq-img"
        >
          <img src="./img/right-faq.png" alt="" />
        </div>
      </div>
      <div class="row faq-item mt-3 p-5">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button p-3 d-flex align-items-center"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
                <h1 class="no">01</h1>
                <h1 class="title-faq">Apa itu SIFA Digital Library?</h1>
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong> SIFA Digital Library</strong> atau
                <strong>SIFALIB</strong> merupakan layanan perpustakaan berbasis
                digital milik Rumah Sakit Umum Daerah Siti Fatimah Az-zahra
                Provinsi Sumatera Selatan.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button p-3 d-flex align-items-center"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="true"
                aria-controls="collapseTwo"
              >
                <h1 class="no">02</h1>
                <h1 class="title-faq">
                  Bagaimana cara saya menelusuri berkas penelitian dalam laman
                  SIFALIB?
                </h1>
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                Langkah pertama yang harus kamu lakukan adalah mengakses laman
                sifalib.sifa.co.id. Kemudian masukkan kata kunci pencarian pada
                kolom yang tersedia. Apabila kamu menginiginkan filter dalam
                pencarianmu, klik tombol berwarna biru di sebelah tombol
                “Temukan” lalu pilih filter yang ingin kamu gunakan. Terakhir,
                klik tombol “Temukan”..
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button p-3 d-flex align-items-center"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="true"
                aria-controls="collapseThree"
              >
                <h1 class="no">03</h1>
                <h1 class="title-faq">
                  Bagaimana cara saya mengunduh berkas penelitian dalam laman
                  SIFALIB?
                </h1>
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                Kamu hanya perlu menekan salah satu kolom dalam tabel hasil
                pencarian. Aplikasi akan mengarahkanmu ke halaman detail berkas
                pencarian. Kemudian kamu hanya perlu menekan teks nama berkas
                yang digarisbawahi yang terletak di bawah halaman detail.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button p-3 d-flex align-items-center"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFour"
                aria-expanded="true"
                aria-controls="collapseFour"
              >
                <h1 class="no">04</h1>
                <h1 class="title-faq">
                  Jika memiliki pertanyaan lebih lanjut, siapa yang harus saya
                  hubungi?
                </h1>
              </button>
            </h2>
            <div
              id="collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                Apabila kamu menemukan kendala maupun pertanyaan lebih lanjut
                mengenai aplikasi SIFALIB, silakan hubungi kontak yang tertera
                pada laman bawah aplikasi. Atau kamu dapat menekan ikon Whatsapp
                yang tersedia di kanan bawah layar, itu akan mengarahkanmu
                langsung ke nomor administrator.
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Body -->

    <!-- Footer -->
    <footer class="text-muted">
      <section>
        <div class="container text-light text-justify mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h5 class="text-uppercase fw-bold mb-3 text-left">
                <b class="head">Tentang Kami</b>
              </h5>
              <p class="desc text-justify">
                SIFALIB merupakan website perpustakaan digital milik RSUD Siti
                Fatimah Provinsi Sumatera Selatan yang memiliki akses ke
                penelitian dan jurnal terkait milik RSUD Siti Fatimah.
              </p>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-2 text-left">
              <h5 class="text-uppercase fw-bold mb-3">
                <b class="head">Navigasi</b>
              </h5>
              <p>
                <a href="/" class="text-reset"
                  >Pencarian</a
                >
              </p>
              <p>
                <a href="/" class="text-reset"
                  >Tentang Kami</a
                >
              </p>
              <p>
                <a href="/faq" class="text-reset"
                  >FAQ</a
                >
              </p>
            </div>

            <div
              class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-2 text-left"
            >
              <h5 class="text-uppercase fw-bold mb-3">
                <b class="head">Hubungi Kami</b>
              </h5>
              <p class="d-flex align-items-center">
                <span class="material-icons-round mr-2">call</span
                >&nbsp;(+62)8117117929
              </p>
              <p class="d-flex align-items-center">
                <span class="material-icons-round mr-2">email</span
                >&nbsp;sdm.rsudsumsel@gmail.com
              </p>
              <p class="d-flex text-justify">
                <span class="material-icons-round mr-2">pin_drop</span>Jl. Kol.
                H. Burlian, Suka Bangun, Kec. Sukarami, Kota Palembang, Sumatera
                Selatan 30151
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="text-center p-4 text-light border-top">
        All Right Reserved ©
        <a class="text-reset fw-bold" style="color: #81afd8" href="#"
          >IT Team RSUD SF Kampus Merdeka 2021</a
        >
      </div>
    </footer>
    <!-- Footer -->
  </body>
</html>
