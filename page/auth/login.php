<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PMI KOTA BANDUNG</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/login.css" /> 
    <link rel="stylesheet" href="../../style/font.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white box shadow fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="../../index.html">
          <img
            class="logo"
            src="./img/logo.png"
            alt="logo"
            width="100%"
            height="40"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-around"
          id="navbarNavDropdown"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="../../index.html"
                >Home</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="./style/404.html"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Unit Donor Darah
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../auth/login.html"
                    >Daftar Online</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="../donor/cekWaktu.html"
                    >CeK Waktu Donor</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="../MobileUnit/mobileunit.html"
                    >Jadwal Mobile Unit</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="../stock darah/stock.html"
                    >Stok Darah</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="./style/404.html"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Markas
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="./style/404.html">markas 1</a>
                </li>
                <li>
                  <a class="dropdown-item" href="./style/404.html">Markas 2</a>
                </li>
                <li>
                  <a class="dropdown-item" href="./style/404.html">Markas 3</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./style/404.html">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../kegiatan/seputarkegiatan.html"
                >Kegiatan</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about/about.html">Abous us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- LOGIN -->
    <section class="h-100 gradient-form" style="background-color: #fff">
      <div class="container py-5 h-100 justify-content-center">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="coba col-sm-10">
            <div
              class="plis rounded-3 text-black"
              style="box-shadow: 0 0px 6px rgba(10, 10, 10, 10)"
            >
              <div class="row">
                <div class="col-12 col-md-6 d-flex gradient-custom-2">
                  <div class="res card-body p-md-5 mx-md-10">
                    <br />
                    <div class="text-center">
                      <h4 class="mt-1 mb-5 pb-1">
                        UNIT TRANSFUSI DARAH PMI KOTA BDG
                      </h4>
                    </div>

                    <div class="container">
                      <div id="button">
                        <a
                          class=""
                          href="../auth/login.html"
                          style="color: #084c61"
                          >MASUK</a
                        >
                        <a
                          class=""
                          style="float: right; color: #d2c4c4"
                          href="signup.html"
                          >DAFTAR</a
                        >
                      </div>
                    </div>

                    <br />
                    <form>
                      <div
                        class="form-outline mb-4"
                        style="padding-left: 10px; padding-right: 10px"
                      >
                        <input
                          style="border-radius: 20px; font-size: 0.8rem"
                          type="username"
                          id="user-name"
                          class="form-control"
                          placeholder="Masukan Nama Pengguna"
                        />
                      </div>

                      <div
                        class="form-outline mb-4"
                        style="padding-left: 10px; padding-right: 10px"
                      >
                        <input
                          style="border-radius: 20px; font-size: 0.8rem"
                          type="password"
                          id="password"
                          class="form-control"
                          placeholder="Masukan Kata Sandi"
                        />
                        <span id="show-password" class="password-icon" onclick="togglePasswordVisibility()">🔐</span>
                      </div>
                      <script>
                        function togglePasswordVisibility() {
                        var passwordInput = document.getElementById("password");
                        var passwordIcon = document.getElementById("show-password");

                              if (passwordInput.type === "text") {
                                  passwordInput.type = "password";
                                  passwordIcon.textContent = "🔓"; // Mengubah ikon menjadi mata terbuka
                              } else {
                                  passwordInput.type = "text";
                                  passwordIcon.textContent = "🔐"; // Mengubah ikon kembali menjadi mata tertutup
                              }
                          }
                      </script>
                    </form>

                    <div class="container">
                      <div id="Login">
                        <a
                          class=""
                          style="color: #d2c4c4"
                          href="../../style/404.html"
                          >Lupa Password?</a
                        >
                        <a
                          href="../auth/pendonorlama.html"
                          style="
                            background-color: #177e89;
                            color: #fff;
                            border-radius: 20px;
                            float: right;
                          "
                          class="btn btn-block fa-lg gradient-custom-2 mb-3"
                          >Masuk</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-6 d-flex align-items-center gradient-custom-2"
                >
                  <div
                    class="text-center"
                    style="position: relative; right: -40px"
                  >
                    <img
                      src="../auth/img/Pendaftaran.png"
                      alt="logo"
                      class="responsive"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <div
      class="fut text-center p-3 text-white"
      style="background-color: #177e89; width: 100%"
    >
      Copyright © 2023 UTD PMI Kota Bandung. All rights reserved.
    </div>
    <script>
      feather.replace();
    </script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
  </body>
</html>
