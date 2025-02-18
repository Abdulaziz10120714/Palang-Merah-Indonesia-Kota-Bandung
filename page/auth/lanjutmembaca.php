<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PMI KOTA BANDUNG</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/lanjutmembaca.css" />
    <link rel="stylesheet" href="../../style/font.css">
    <link rel="stylesheet" href="path-to-magnific-popup/magnific-popup.css">
    <script src="https://unpkg.com/feather-icons"></script>
    
  </head>

  <body>
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg bg-white box shadow fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html">
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
                <a class="nav-link active" aria-current="page" href="../../index.html">Home</a>
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
                  <li><a class="dropdown-item" href="../../page/syarat donor/syarat.html">Daftar Online</a></li>
                  <li><a class="dropdown-item" href="../donor/cekWaktu.html">CeK Waktu Donor</a></li>
                  <li>
                    <a class="dropdown-item" href="../page/MobileUnit/mobileunit.html">Jadwal Mobile Unit</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../../page/stock darah/stock.html">Stok Darah</a>
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
                <a class="nav-link" href="./page/kegiatan/seputarkegiatan.html">Kegiatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./page/about/about.html">Abous us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- navbar end -->

    <!-- Lanjut Membaca -->
    <div class="judul text-center">
        <h4 class="mt-4 mb-4 pb-1">-----BERITA-----</h4>
        <h4 class="mt-1 mb-5 pb-1" style="color: #DB3A34;">Serah Terima Jabatan PMI Kota Bandung</h4>
      </div>
    
 
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <div class="col-sm-12 col-md-8 px-2 list-card">
              <div id="slideshow">
              <div class="utama card">
                <div class="top-left" id="tanggal" style="color: black;"></div>
                <img class="card-img-top img-fluid" src="../auth/img/s2.jpg" alt="Card image cap">
                <div class="abuabu card-body ">
                    <div class="row">
                        <div class="foto-bawah col-md-4">
                            <a href="../auth/img/s1.jfif" class="popup-image">
                                <img class="card-img-top img-fluid small-img" src="../auth/img/s2.jpg" alt="Batas gambar kartu">
                            </a>
                        </div>
                        <div class="foto-bawah col-md-4">
                            <a href="../auth/img/s2.jpg" class="popup-image">
                                <img class="card-img-top img-fluid small-img" src="../auth/img/s1.jfif"  alt="Batas gambar kartu">
                            </a>
                        </div>
                        <div class="foto-bawah col-md-4">
                            <a href="../auth/img/s1.jfif" class="popup-image">
                                <img class="card-img-top img-fluid small-img" src="../auth/img/s4.jpg" alt="Batas gambar kartu">
                            </a>
                        </div>
                    </div>
                  </div>
              
                  <script>
                    var topImage = document.querySelector('#slideshow .card-img-top');
                    var bottomImages = document.querySelectorAll('#slideshow .small-img');
                    var currentIndex = 0;
                  
                    function changeImage() {
                      topImage.src = bottomImages[currentIndex].src;
                      currentIndex = (currentIndex + 1) % bottomImages.length;
                    }
                  
                    setInterval(changeImage, 1500); //mengatur kecepatan slide
                  </script>
                <div class="isi-berita card-body ">
                  <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
         
    <!-- Footer section -->
    <footer class="footer container-fluid mt-3 "> 
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
  <div class="text-center p-3 text-white" style="background-color: #177E89; bottom: 0; width: 100%;">Copyright © 2023 UTD PMI Kota Bandung. All rights reserved.</div>

  
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="path-to-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-image').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>

<script>
  // Mengambil tanggal saat ini
  var today = new Date();

  // Mengubah tanggal menjadi format yang diinginkan (misalnya, "04-09-2023")
  var formattedDate = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();

  // Menampilkan tanggal di dalam elemen dengan id "tanggal"
  document.getElementById('tanggal').textContent = formattedDate;
</script>
<script>feather.replace();</script>
  </body>
</html>
