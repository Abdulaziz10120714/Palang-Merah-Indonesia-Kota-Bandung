<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PMI</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style/landingPage.css" />
    <link rel="stylesheet" href="style/font.css" />
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
          <!-- navbar -->
          <nav class="navbar navbar-expand-lg bg-white box shadow fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="../index.php">
                <img src="./img/logo.png" alt="logo" width="100%" height="40" />
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
                <ul class="navbar-nav ">
                  <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
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
                      <li><a class="dropdown-item" href="./page/syarat donor/syarat.php">Daftar Online</a></li>
                      <li><a class="dropdown-item" href="./page/donor/cekWaktu.php">CeK Waktu Donor</a></li>
                      <li>
                        <a class="dropdown-item" href="./page/MobileUnit/mobileunit.php">Jadwal Mobile Unit</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="./page/stock darah/stock.php">Stok Darah</a>
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
                      <li><a class="dropdown-item" href="./style/404.html">markas 1</a></li>
                      <li><a class="dropdown-item" href="./style/404.html">Markas 2</a></li>
                      <li>
                        <a class="dropdown-item" href="./style/404.html">Markas 3</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./style/404.html">Artikel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./page/kegiatan/seputarkegiatan.php">Kegiatan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./page/about/about.php">About us</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- navbar end -->

          <!-- slide image  -->

          <div
            id="carouselExampleAutoplaying"
            class="gambarGerak carousel slide "
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="./img/landingpage/5.JPG"
                  class="d-block w-100 h-100"
                  alt="gambar 1"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./img/landingpage/2.jpg"
                  class="d-block w-100 h-100"
                  alt="gambar 2"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./img/landingpage/3.jpg"
                  class="d-block w-100 h-100"
                  alt="gambar 3"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="./style/404.htmlcarouselExampleAutoplaying"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="./style/404.htmlcarouselExampleAutoplaying"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- slide image end  -->

                        <!-- isi -->

                        <div class="aktifitas container bg-white rounded-3 justify-content-center text-center shadow">
                          <div class="row">
                            <div class="col-12">
                              <div class="col-sm-12 col-md-4 p-1 list-card ">
                                <div class="card">
                                  <img class="card-img-top img-fluid" src="./img/landingpage/1.jpg" alt="Card image cap">
                                  <div class="card-body ">
                                    <h5 class="card-title">Markas</h5>
                                    <p class="card-text">Unit markas adalah Lorem ipsum dolor sit ame. lotrem lroemejnas asdas </p>
                                    <a href="./style/404.html" class="btn btn-primary rounded-pill">Cek Markas</a>
                                  </div>
                                </div>
                              </div>
                      
                              <div class="col-sm-12 col-md-4 p-1 list-card">
                                <div class="card">
                                  <img class="card-img-top img-fluid" src="./img/landingpage/2.jpg" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="card-title">Kepengurusan</h5>
                                    <p class="card-text">kepengurusan PMI Kota Bandung dan struktur organisasi.</p>
                                    <a href="./style/404.html" class="btn btn-primary rounded-pill">Cek kepengurusan</a>
                                  </div>
                                </div>
                              </div>
                      
                              <div class="col-sm-12 col-md-4 p-1 list-card">
                                <div class="card">
                                  <img class="card-img-top iimg-fluid" src="./img/landingpage/3.jpg" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="card-title">Unit Transfusi Darah</h5>
                                    <p class="card-text">Informasi tentan Unit Transfusi Darah Kota Bandung.</p>
                                    <a href="./page/home page utd/homePage.html" class="btn btn-primary rounded-pill">Cek UTD</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- isi end -->

            <!-- profile visi dan misi -->
            <div class="profile container-fluid bg-white ">
              <div class="container mt-5">
                <div class="row">
                  <div class="col-4">
                    <img src="./img/profile/logo.png" class="img-fluid" alt="logo PMI">
                  </div>
                  <div class="col-8">
                    <h1>Profile Palang Merah Indonesia</h1>
                    <p>Palang Merah Indonesia (PMI) adalah sebuah organisasi perhimpunan nasional di Indonesia yang bergerak dalam bidang sosial kemanusiaan. </p>
                      <p>Pada 9 September 1945, Dr. Djoendjoenan, Kepala Jawatan Kesehatan Kotapraja Bandung membentuk organisasi Palang Merah Bandung yang bersifat lokal karena pada saat itu perhimpunan Palang Merah Indonesia yang bersifat nasional belum ada. Palang Merah Bandung merupakan cikal bakal Palang Merah Indonesia di Jawa Barat.
                      Sebagai Ibukota dari Jawa Barat, Kota Bandung tidak terlepas dari misi sosial dan kemanusiaan yang harus diembannya. PMI Kota Bandung berstatus PMI Cabang</p>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-8">
                    <h1>Visi Dan Misi</h1>
                    <h5>Visi</h5>
                    <p>PMI mampu dan siap menyediakan dan memberikan pelayanan kepalang merahan dengan cepat dan tepat
                      dengan berpegang teguh pada Prinsip-prinsip Dasar Palang Merah dan Bulan Sabit Merah Internasional</p>
                    <h5>Misi</h5>
                    <ol>
                      <li>Menyebarluaskan dan mendorong aplikasi secara konsisten Prinsip-prinsip Dasar Palang Merah dan Bulan Sabit Merah Internasional.</li>
                      <li>Melaksanakan kesiap siagaan di dalam penanganan bencana dan konflik yang berbasis pada masyarakat</li>
                      <li>Memberikan bantuan dalam bidang kesehatan yang berbasis masyarakat.</li>
                      <li>Pengelolaan transfusi darah secara profesional.</li>
                    </ol>
                  </div>
                  <div class="col-4">
                    <img src="./img/profile/visi dan misi.png" class="img-fluid" alt="visi misi">
                  </div>
                </div>
              </div>
            </div>
            <!-- profile visi dan misi end -->



            <!-- agenda kegiatan -->
            <div class="container-fluid bg-white">
            <div class="agenda-judul container ">
              <h1 class="text-white">Agenda Kegiatan</h1>
            </div>
            <div class="agenda-isi container px-5 pb-2">
              <div class="row text-center">
                <div class="col-12 ">
                  <div class="col-sm-12 col-md-4 p-1 list-card">
                    <div class="card">
                      <img class="card-img-top img-fluid" src="./img/landingpage/1.jpg" alt="Card image cap">
                      <div class="card-body ">
                        <p class="text-danger text-start">28-08-2023</p>
                        <p class="card-text">Unit markas adalah Lorem ipsum dolor sit amdasdasdasaade.</p>
                        <a href="page/auth/lanjutmembaca.html" class="btn btn-primary rounded-pill">Lanjut membaca</a>
                      </div>
                    </div>
                  </div>
              
                  <div class="col-sm-12 col-md-4 p-1 list-card">
                    <div class="card">
                      <img class="card-img-top img-fluid" src="./img/landingpage/2.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="text-danger text-start">28-08-2023</p>
                        <p class="card-text">kepengurusan PMI Kota Bandung dan struktur organisasi.</p>
                        <a href="page/auth/lanjutmembaca.html" class="btn btn-primary rounded-pill">Lanjut membaca</a>
                      </div>
                    </div>
                  </div>
              
                  <div class="col-sm-12 col-md-4 p-1 list-card">
                    <div class="card">
                      <img class="card-img-top iimg-fluid" src="./img/landingpage/3.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="text-danger text-start">28-08-2023</p>
                        <p class="card-text">Informasi tentan Unit Transfusi Darah Kota Bandung.</p>
                        <a href="page/auth/lanjutmembaca.html" class="btn btn-primary rounded-pill">Lanjut membaca</a>
                      </div>
                    </div>
                  </div>
                </div>        
            </div>
            <div class="d-flex justify-content-center mt-3 mb-3">
              <a href="page/kegiatan/seputarkegiatan.html" class="btn btn-primary rounded-pill">Lihat Semua Kegiatan</a>
            </div>
          </div>
            </div>
            <!-- agenda kegiatan end -->



          <!-- image link -->
          <div class="link-image container-fluid p-5 mt-5 rounded">
            <h1 class="text-center mb-5 text-white">Kegiatan Kepengurusan</h1>
            <div class="container-fluid justify-content-center">
              <div class="row row-xs-2 row-cols-sm-3  row-cols-xl-5 row-cols-xxl-6">
                <div class="col mb-2">
                  <a href="./style/404.html" >
                    <div class="list-kegiatan">
                      <div class="img-fluid img-kegiatan">
                        <img src="https://source.unsplash.com/random/200x200/?task&1" class="img-fluid" alt="">
                      </div>
                      <span class="judul-kegiatan">JUDUL KEGIATAN</span>
                    </div>
                  </a>
                </div>
                <div class="col mb-2">
                  <a href="./style/404.html" >
                    <div class="list-kegiatan">
                      <div class="img-fluid img-kegiatan">
                        <img src="https://source.unsplash.com/random/200x200/?task&1" class="img-fluid" alt="">
                      </div>
                      <span class="judul-kegiatan">JUDUL KEGIATAN</span>
                    </div>
                  </a>
                </div>
                <div class="col mb-2">
                  <a href="./style/404.html" >
                    <div class="list-kegiatan">
                      <div class="img-fluid img-kegiatan">
                        <img src="https://source.unsplash.com/random/200x200/?task&1" class="img-fluid" alt="">
                      </div>
                      <span class="judul-kegiatan">JUDUL KEGIATAN</span>
                    </div>
                  </a>
                </div>
                <div class="col mb-2">
                  <a href="./style/404.html" >
                    <div class="list-kegiatan">
                      <div class="img-fluid img-kegiatan">
                        <img src="https://source.unsplash.com/random/200x200/?task&1" class="img-fluid" alt="">
                      </div>
                      <span class="judul-kegiatan">JUDUL KEGIATAN</span>
                    </div>
                  </a>
                </div>
                <div class="col mb-2">
                  <a href="./style/404.html" >
                    <div class="list-kegiatan">
                      <div class="img-fluid img-kegiatan">
                        <img src="https://source.unsplash.com/random/200x200/?task&1" class="img-fluid" alt="">
                      </div>
                      <span class="judul-kegiatan">JUDUL KEGIATAN</span>
                    </div>
                  </a>
                </div>
                <div class="col mb-2">
                  <a href="./style/404.html" >
                    <div class="list-kegiatan">
                      <div class="img-fluid img-kegiatan">
                        <img src="https://source.unsplash.com/random/200x200/?task&1" class="img-fluid" alt="">
                      </div>
                      <span class="judul-kegiatan">JUDUL KEGIATAN</span>
                    </div>
                  </a>
                </div>

                <div class="col mb-2">
                  <a href="./style/404.html" >
                    <div class="list-kegiatan">
                      <div class="img-fluid img-kegiatan">
                        <img src="https://source.unsplash.com/random/200x200/?task&1" class="img-fluid" alt="">
                      </div>
                      <span class="judul-kegiatan">JUDUL KEGIATAN</span>
                    </div>
                  </a>
                </div>
                <div class="col mb-2">
                  <a href="./style/404.html" >
                    <div class="list-kegiatan">
                      <div class="img-fluid img-kegiatan">
                        <img src="https://source.unsplash.com/random/200x200/?task&1" class="img-fluid" alt="">
                      </div>
                      <span class="judul-kegiatan">JUDUL KEGIATAN</span>
                    </div>
                  </a>
                </div>
                <div class="col mb-2">
                  <a href="./style/404.html" >
                    <div class="list-kegiatan">
                      <div class="img-fluid img-kegiatan">
                        <img src="https://source.unsplash.com/random/200x200/?task&1" class="img-fluid" alt="">
                      </div>
                      <span class="judul-kegiatan">JUDUL KEGIATAN</span>
                    </div>
                  </a>
                </div>
                <div class="col mb-2">
                  <a href="./style/404.html" >
                    <div class="list-kegiatan">
                      <div class="img-fluid img-kegiatan">
                        <img src="https://source.unsplash.com/random/200x200/?task&1" class="img-fluid" alt="">
                      </div>
                      <span class="judul-kegiatan">JUDUL KEGIATAN</span>
                    </div>
                  </a>
                </div>
              </div>
              </div>
            </div>
          </div>
          
      <!-- image link end -->



      <footer class="footer container-fluid mt-3"> 
        <div class="row">
            <div class="maps col-md-6 d-flex justify-content-cener">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.395596060229!2d107.6197288!3d-6.9086646!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e635b9b3db59%3A0xb77d74e050dde5aa!2sPMI%20Kota%20Bandung!5e0!3m2!1sid!2sid!4v1693533088941!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="me-5"></iframe>
            </div>
            <div class="pmi col-md-6  flex-column">
              <h1 class="txtpmi mt-4 text-white ps-5">PMI KOTA BANDUNG</h1> 
              <div class="met row">
              <div class="alamat d-flex align-items-center ps-5">
                <a href="https://www.google.com/maps/place/PMI+Kota+Bandung/@-6.9086646,107.6197288,15z/data=!4m6!3m5!1s0x2e68e635b9b3db59:0xb77d74e050dde5aa!8m2!3d-6.9086646!4d107.6197288!16s%2Fg%2F1vgx318m?entry=ttu">
                  <i data-feather="map-pin" style="color: white;"></i>
                </a>
                  <p class="align-items-center ms-3 ">Jl. Aceh No.79, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat</p>
              </div>
              <div class="telfon d-flex align-items-center ps-5">           
                  <i data-feather="phone-call"></i>
                  <p class="align-items-center ms-3">(022) 4207052 / 082130122784 (Pelayanan Darah)</p>
              </div>
              <div class="instagram d-flex align-items-center ps-5">
                <a href="https://www.instagram.com/pmikotabdg/">
                  <i data-feather="instagram" style="color: white;"></i>
                </a>
                  <p class="align-items-center ms-3"><a href="../../style/404.html" style="text-decoration:none; color: white;">pmikotabdg</a></p>
              </div>
              <div class="facebook d-flex align-items-center ps-5">
                <a href="https://www.facebook.com/pmikotabandung/">
                  <i data-feather="facebook" style="color: white;"></i>
                </a>
                  <p class="align-items-center ms-3"><a href="../../style/404.html" style="text-decoration:none; color: white;">PMI Kota Bandung</a></p>
              </div>
            </div>
            </div>
          </div>
        </div>
        </div>
      </footer>
      <!-- footer end -->
      <!-- Copyright notice -->
      <div class="fut-bawah text-center p-3 text-white" style="background-color: #177E89; bottom: 0; width: 100%;">Copyright © 2023 UTD PMI Kota Bandung. All rights reserved.</div>
      
      



    <script>feather.replace();</script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>


