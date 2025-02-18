<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PMI KOTA BANDUNG</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/pendaftarandonor.css" />
    <link rel="stylesheet" href="../../style/font.css" />
    

   
  </head>
  <div>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white box shadow fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="../../index.html">
          <img class="logo" src="./img/logo.png" alt="logo" width="100%" height="40" />
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
                href="../../style/404.html"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Unit Donor Darah
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../syarat donor/syarat.html">Daftar Online</a></li>
                <li><a class="dropdown-item" href="../donor/cekWaktu.html">CeK Waktu Donor</a></li>
                <li>
                  <a class="dropdown-item" href="../../page/MobileUnit/mobileunit.html">Jadwal Mobile Unit</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../stock darah/stock.html">Stok Darah</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="../../style/404.html"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Markas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../../style/404.html">markas 1</a></li>
                <li><a class="dropdown-item" href="../../style/404.html">Markas 2</a></li>
                <li>
                  <a class="dropdown-item" href="../../style/404.html">Markas 3</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../style/404.html">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../page/kegiatan/seputarkegiatan.html">Kegiatan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../page/about/about.html">Abous us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar end -->

 <!--header  -->
 <div class="head container-fluid">
  <div class="row g-0 text-center">
    <div class="col-sm-12 col-md-4">
      <div class="card mb-3" style="max-width: 50vmin;">
        <div class="card-header">ANTRIAN TUNGGU</div>
        <div class="card-body">
          <h5 class="card-title">5</h5>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-8 fw-normal" style="font-size: 3vmin;"><div class="alert " role="alert">
      <p>Silakan Mendaftar<br>
Anda dapat melakukan donor Apheresis hari ini.<br>
Anda dapat melakukan donor Reguler/Sukarela hari ini.
</p></div></div>
  </div>
 </div>
 <!--header end  -->

  <!-- PENDAFTARAN -->
<nav class="cont-tab mt-5">
  <div class="nav nav-tabs " id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">PILIH JENIS DONOR</button>
    <button class="nav-link" id="nav-satu-tab" data-bs-toggle="tab" data-bs-target="#nav-satu" type="button" role="tab" aria-controls="nav-satu" aria-selected="false">PERTANYAAN#1</button>
    <button class="nav-link" id="nav-dua-tab" data-bs-toggle="tab" data-bs-target="#nav-dua" type="button" role="tab" aria-controls="nav-dua" aria-selected="false">PERTANYAAN#2</button>
    <button class="nav-link" id="nav-tiga-tab" data-bs-toggle="tab" data-bs-target="#nav-tiga" type="button" role="tab" aria-controls="nav-tiga" aria-selected="false">PERTANYAAN#3</button>
    <button class="nav-link" id="nav-konfirmasi-tab" data-bs-toggle="tab" data-bs-target="#nav-konfirmasi" type="button" role="tab" aria-controls="nav-konfirmasi" aria-selected="false">KONFIRMASI</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!-- pilih jenis donor -->
  <div class="pilih-jenis tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <div class="container mt-5 text-center">Silahkan Pilih Jenis Donor</div>
    <div class="container text-center mt-5">
      <div class="row g-2">
        <div class="col-6">
          <div class="p-3">   
          <div class="form-check py-2 rounded" >
            <input class="form-check-input " type="radio" name="flexRadioDefault" id="idSukarela">
            <label class="form-check-label text-center" for="idSukarela" >
              SUKARELA
            </label>
          </div></div>
        </div>
        <div class="col-6">
          <div class="p-3">          
            <div class="form-check py-2 rounded" >
            <input class="form-check-input " type="radio" name="flexRadioDefault" id="idPengganti">
            <label class="form-check-label text-center" for="idPengganti" >
              PENGGANTI
            </label>
          </div></div>
        </div>
        <div class="col-6">
          <div class="p-3">          
            <div class="form-check py-2 rounded" >
            <input class="form-check-input " type="radio" name="flexRadioDefault" id="idApheresis">
            <label class="form-check-label text-center" for="idApheresis" >
              APHERESIS
            </label>
          </div></div>
        </div>
        <div class="col-6">
          <div class="p-3">          
            <div class="form-check py-2 rounded" >
            <input class="form-check-input " type="radio" name="flexRadioDefault" id="idKeluarga">
            <label class="form-check-label text-center" for="idKeluarga" >
              KELUARGA
            </label>
          </div></div>
        </div>
      </div>
    </div>
      <div class="isi-pengganti container shadow rounded mt-5" id="cont-pengganti">
        <div class="banner-pengganti text-center rounded"><p>KOLOM DONOR PENGGANTI</p></div>
          <div class="data-pengganti px-5 mt-5">
            <div class="container">
                  <div class="fw-bold mt-3">Nama Pasien</div>
                  <div class="input-group mt-2">
                    <input
                      class="form-control border rounded-pill text-black"
                      type="search"
                      placeholder="Masukan Nama Anda"
                      style="font-size: 2vmin"
                      id="example-search-input"
                    />
              </div>
              <div class="fw-bold mt-3">Rumah Sakit</div>
              <div class="input-group mt-2">
                <select class="form-select border rounded-pill text-black" style="font-size: 2vmin" id="example-select-input">
                  <option selected>Pilih Rumah Sakit</option>
                  <option value="rumahsakit">Rumah Sakit 1</option>
                  <option value="rumahsakit">Rumah Sakit 2</option>
                  <option value="rumahsakit">Rumah Sakit 3</option>
                </select>
              </div>
              <div class="fw-bold mt-3" >Nomor Register</div>
                  <div class="input-group mt-2">
                    <input
                      class="form-control border rounded-pill text-black"
                      type="search"
                      placeholder="Masukan Nomor Register Anda"
                      style="font-size: 2vmin"
                      id="example-search-input"
                    />
              </div>
              <div class="fw-bold mt-3">Komponen Darah</div>
              <div class="input-group mt-2">
                <select class="form-select border rounded-pill text-black" style="font-size: 2vmin" id="komponenDarah">
                  <option selected>Pilih Komponen Darah</option>
                  <option value="komponenDarah">TC</option>
                  <option value="komponenDarah">PRC</option>
                  <option value="komponenDarah">FFP</option>
                  <option value="komponenDarah">AHF</option>
                </select>
              </div>
              <div class="fw-bold mt-3">Golongan Darah</div>
              <div class="input-group mt-2">
                <select class="form-select border rounded-pill text-black" style="font-size: 2vmin" id="golonganDarah">
                  <option selected>Pilih Golongan Darah</option>
                  <option value="golonganDarah">A</option>
                  <option value="golonganDarah">B</option>
                  <option value="golonganDarah">AB</option>
                  <option value="golonganDarah">O</option>
                </select>
              </div>
              <div class="fw-bold mt-3" >Rhesus</div>
              <div class="input-group mt-2">
                <select class="form-select border rounded-pill text-black" style="font-size: 2vmin" id="rhesus">
                  <option selected>Pilih Rhesus</option>
                  <option value="rhesus">Positif</option>
                  <option value="rhesus">Negatif</option>
                </select>
              </div>
          </div>
        </div>
      </div>

      <div class="isi-keluarga container shadow rounded mt-5" id="cont-keluarga">
        <div class="banner-keluarga text-center rounded"><p>KOLOM DONOR KELUARGA</p></div>
        <div class="data-keluarga px-5 mt-5">
                <div class="container">
                  <div class="fw-bold mt-3">Nama Pasien</div>
                  <div class="input-group mt-2">
                    <input
                      class="form-control border rounded-pill text-black"
                      type="search"
                      placeholder="Masukan Nama Anda"
                      style="font-size: 2vmin"
                      id="example-search-input"
                    />
              </div>
              <div class="fw-bold mt-3">Rumah Sakit</div>
              <div class="input-group mt-2">
                <select class="form-select border rounded-pill text-black" style="font-size: 2vmin" id="example-select-input">
                  <option selected>Pilih Rumah Sakit</option>
                  <option value="rumahsakit">Rumah Sakit 1</option>
                  <option value="rumahsakit">Rumah Sakit 2</option>
                  <option value="rumahsakit">Rumah Sakit 3</option>
                </select>
              </div>
              <div class="fw-bold mt-3" >Nomor Register</div>
                  <div class="input-group mt-2">
                    <input
                      class="form-control border rounded-pill text-black"
                      type="search"
                      placeholder="Masukan Nomor Register Anda"
                      style="font-size: 2vmin"
                      id="example-search-input"
                    />
              </div>
              <div class="fw-bold mt-3">Komponen Darah</div>
              <div class="input-group mt-2">
                <select class="form-select border rounded-pill text-black" style="font-size: 2vmin" id="komponenDarah">
                  <option selected>Pilih Komponen Darah</option>
                  <option value="komponenDarah">TC</option>
                  <option value="komponenDarah">PRC</option>
                  <option value="komponenDarah">FFP</option>
                  <option value="komponenDarah">AHF</option>
                </select>
              </div>
              <div class="fw-bold mt-3">Golongan Darah</div>
              <div class="input-group mt-2">
                <select class="form-select border rounded-pill text-black" style="font-size: 2vmin" id="golonganDarah">
                  <option selected>Pilih Golongan Darah</option>
                  <option value="golonganDarah">A</option>
                  <option value="golonganDarah">B</option>
                  <option value="golonganDarah">AB</option>
                  <option value="golonganDarah">O</option>
                </select>
              </div>
              <div class="fw-bold mt-3" >Rhesus</div>
              <div class="input-group mt-2">
                <select class="form-select border rounded-pill text-black" style="font-size: 2vmin" id="rhesus">
                  <option selected>Pilih Rhesus</option>
                  <option value="rhesus">Positif</option>
                  <option value="rhesus">Negatif</option>
                </select>
              </div>
            </div>
        </div>
      </div>
      <div class="container mt-5 d-flex justify-content-end" id="btn-selanjutanya"><button type="button" class="btn btn-primary rounded-4" >SELANJUTNYA</button></div>
    </div>
  <!-- pilih jenis donor end -->

<!-- pertanyaan 1 -->
<div class="pertanyaan-satu tab-pane fade show active" id="nav-satu" role="tabpanel" aria-labelledby="nav-satu-tab" tabindex="0">
  <div class="isi-satu container shadow rounded mt-5" id="cont-satu">
    <div class="banner-satu text-center rounded"><p> PERTANYAAN#1</p></div>
      <div class="data-satu ">
        <div class="container p-3 mt-2 ">
          <table class="text-start">
            <tr>
              <td style="background-color: #177E89; color: white;">APAKAH ANDA HARI INI :</td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4"> 1. Sehat Pada Hari ini</div>
                <div class="col col-md-2 col-sm-4 text-end">
                <input type="radio" name="sehat" id="ya" value="ya">
                <label for="ya" class="ms-1">ya</label>
                <input type="radio" name="sehat" id="tidak" value="Tidak">
                <label for="tidak" class="ms-1 ">Tidak</label>
              </div>
              </div>
              </td>                        
            </tr>
            <tr> 
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">2. Sedang Minum Antibiotik</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">3. Sedang Minum Obat lain untuk infeksi</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #177E89; color: white;">Dalam Waktu 48 Jam Terakhir</td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">4. Apakah anda sedang minum aspirin atau obat yang mengandung aspirin?</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                </div>
              </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #177E89; color: white;">Dalam Waktu 1 Minggu Terakhir</td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">5. Mengalami sakit kepala dan demam secara bersamaan</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #177E89; color: white;">Dalam Waktu 6 Minggu Terakhir</td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">6. Untuk donor darah wanita : apakah saat ini sedang hamil Jika ya, Kehamilan keberapa ?
                    <input id="kehamilan-donor" name="kehamilan_ke" type="number" min="0" class="form-control" style="width: 30%; float: right;">
                  </div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #177E89; color: white;">Dalam Waktu 8 Minggu Terakhir</td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">7. Mendonorkan Darah</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">8. Menerima Vaksinasi atau suntikan lainnya</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">9.Pernah kontak dengan orang yang menerima vaksin smallpox</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #177E89; color: white;">Dalam Waktu 10 Minggu Terakhir</td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">10. Pernah menyumbangkan 2 kantong sel darah melalui proses apheresis</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
          </table>
      </div>
    </div>
  </div>
  <div class="container mt-4 d-flex justify-content-end">
    <button type="button" id="btn-selanjutanya" class="btn btn-danger rounded-4 me-3" >KEMBALI</button>
    <button type="button" id="btn-kembali" class="btn btn-primary rounded-4" >SELANJUTNYA</button>
    </div>
  </div>
<!-- pertanyaan 1 end -->

<!-- pertanyaan 2 -->
<div class="pertanyaan-dua tab-pane fade show active" id="nav-dua" role="tabpanel" aria-labelledby="nav-dua-tab" tabindex="0">
  <div class="isi-dua container shadow rounded mt-5" id="cont-dua">
    <div class="banner-dua text-center rounded"><p> PERTANYAAN#2</p></div>
      <div class="data-dua ">
        <div class="container p-3 mt-2 ">
          <table class="text-start">
            <tr>
              <td style="background-color: #177E89; color: white;">Dalam 12 Minggu Terakhir</td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">11. Pernah Menerima Transfusi Darah</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">12. Pernah Mendapat Transplantasi Organ Jaringan atau  Sumsum Tulang</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">13. Pernah Cangkok Tulang Untuk Kulit</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">14. Pernah Tertusuk Jarum Medis</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">15. Pernah Berhubungan Seksual Dengan Orang Penderita HIV/AIDS</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">16. Pernah Berhubungan Dengan Pekerja Seks Komersial</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">17. Pernah Berhubungan Dengan Pengguna Narkoba Jarum Suntik</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">18. Pernah Berhubungan Dengan Pengguna Konsentrat Factor Pembeku</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">19. Donor Wanita : Pernah Berhubungan Dengan Laki-laki Biseksual</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">20. Pernah Berhubungan Seksual Dengan Penderita Hepatitis</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">21. Tinggal Dengan Penderita Hepatitis</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                </div></td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">22. Memiliki Tato</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                </div>
                </div>
              </td>
            </tr>
            <tr>
              <td  style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">23. Memiliki Tindik Telinga  atau Bagian Tubuh Lainnya</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">24. Sedang atau Pernah Mendapatkan Pengobatan Sifilis atau GO (Kencing Bernanah)</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                </div>
                </div>
              </td>
            </tr>
            <tr>
              <td  style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">25. Pernah ditahan dipenjara  Untuk Waktu Lebih Dari  72 Jam</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td style="background-color: #177E89; color: white;">Dalam 3 Tahun</td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">26. Pernah Berada diluar Indonesia</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                </div>
                </div>
              </td>
            </tr>
          </table>
      </div>
    </div>
  </div>
  <div class="container mt-4 d-flex justify-content-end">
    <button type="button" id="btn-selanjutanya" class="btn btn-danger rounded-4 me-3" >KEMBALI</button>
    <button type="button" id="btn-kembali" class="btn btn-primary rounded-4" >SELANJUTNYA</button>
    </div>
  </div>
<!-- pertanyaan 2 end -->

<!-- pertanyaan 3  -->
<div class="pertanyaan-tiga tab-pane fade show active" id="nav-tiga" role="tabpanel" aria-labelledby="nav-tiga-tab" tabindex="0">
  <div class="isi-tigas container shadow rounded mt-5" id="cont-tiga">
    <div class="banner-tiga text-center rounded"><p> PERTANYAAN#3</p></div>
      <div class="data-tiga">
        <div class="container p-3 mt-2 ">
          <table class="text-start">
            <tr>
              <td style="background-color: #177E89; color: white;">Tahun 1997 Hingga Sekarang</td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">27. Menerima uang, obat atau pembayaran lainnya untuk seks</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">28. Laki laki : Pernah berhubungan seksual dengan laki-laki</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #177E89; color: white;">Tahun 1980 Hingga Sekarang</td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">29. Tinggal selama 5 Tahun atau lebih di eropa</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td >
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">30. Menerima Transfusi darah di Inggris</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                <input type="radio" name="sehat" id="ya" value="ya">
                <label for="ya" class="ms-1">ya</label>
                <input type="radio" name="sehat" id="tidak" value="Tidak">
                <label for="tidak" class="ms-1 -mt-1">Tidak</label>
                  </div>
              </div></td>
            </tr>
            <tr>
              <td style="background-color: #177E89; color: white;">Tahun 1980 Hingga 1996</td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">31. Tinggal selama 3 bulan atau lebih di Inggris</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td style="background-color: #177E89; color: white;">Apakah Anda</td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">32. Mendapat hasil Positif untuk HIV/AIDS</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">33. Menggunakan jarum suntik untuk obat-obatan, Steroid yang tidak diresepkan dokter</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">34. Menggunakan konsentrat faktor pembeku</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">35. Menderita Hepatitis</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">36. Menderita Malaria</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td  style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">37. Menderita kanker termasuk leukemia</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">38. Bermasalah dengan jantung dan paru-paru</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">39. Menderita pendarahan atau penyakit berhubungan dengan darah</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td>
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">40. Berhubungan seksual dengan orang yang tertinggal di Afrika</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="background-color: #DBDBDB;">
                <div class="row form-grup">
                  <div class="col col-md-10 col-sm-4">41. Tinggal di Afrika</div>
                  <div class="col col-md-2 col-sm-4 text-end">
                  <input type="radio" name="sehat" id="ya" value="ya">
                  <label for="ya" class="ms-1">ya</label>
                  <input type="radio" name="sehat" id="tidak" value="Tidak">
                  <label for="tidak" class="ms-1 ">Tidak</label>
                  </div>
                </div></td>
            </tr>
          </table>
      </div>
    </div>
  </div>
  <div class="container mt-4 d-flex justify-content-end">
    <button type="button" id="btn-selanjutanya" class="btn btn-danger rounded-4 me-3" >KEMBALI</button>
    <button type="button" id="btn-kembali" class="btn btn-primary rounded-4" >SELANJUTNYA</button>
    </div>
  </div>
<!-- pertanyaan 3 end -->

<!-- konfirmasi -->
<div class="konfirmasi tab-pane fade show active" id="nav-konfirmasi" role="tabpanel" aria-labelledby="nav-konfirmasi-tab" tabindex="0">
  <div class="isi-konfirmasi container shadow rounded mt-5" id="cont-dua">
    <div class="banner-konfirmasi text-center rounded"><p>INFORMED CONSENT DONOR</p></div>
      <div class="data-konfirmasi ">
        <div class="container p-3 ">
          <div class="text-start text-black mt-3" >
            <p>Yth. PMI Kota Bandung<p>
            <p>Saya telah membaca dan mendapatkan semua informasi yang diberikan serta menjawab dengan jujur.</p>
            <p>Saya mengerti dan bersedia menyumbangkan darah sesuai dengan standar yang berlakukan dan setuju diambil contoh darah untuk keperluan pemeriksaan laboratorium berupa uji golongan darah, HIV, Hepatitis C, Sifilis dan infeksi lainnya.</p>
            <p>Bila ternyata hasil laboratorium perlu ditindaklanjuti, maka saya setuju untuk diberi kabar dan darah saya tidak di transfusikan kepala calon pasien.</p>
            <p>
              Jika komponen plasma tidak terpakai untuk transfusi, saya setuju dapat dijadikan produk plasma untuk pengobatan.</p>
            </div>
      </div>
    </div>
  </div>
  <div class="container mt-4 d-flex justify-content-center">
    <button type="button" id="btn-selanjutanya" class="btn btn-danger rounded-4 me-3" >KEMBALI</button>
    <button type="button" id="btn-kembali" class="btn btn-primary rounded-4" style="background-color: #084C61 !important; " >Saya Setuju & Simpan Data</button>
    </div>
  </div>
<!-- konfirmasi end -->
</div>
   <!-- PENDAFTARAN END -->
      
        <!-- Footer section -->
        <footer class="footer container-fluid mt-5 "> 
          <div class="row mx-0">
              <div class="maps col-md-6 d-flex justify-content-cener">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.395596060229!2d107.6197288!3d-6.9086646!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e635b9b3db59%3A0xb77d74e050dde5aa!2sPMI%20Kota%20Bandung!5e0!3m2!1sid!2sid!4v1693533088941!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-5 me-5"></iframe>
              </div>
              <div class="pmi col-md-6  flex-column">
                <h1 class="txtpmi mt-4 text-white ps-5">PMI KOTA BANDUNG</h1>
                <div class="alamat d-flex align-items-center ps-5">
                    <i data-feather="map-pin"></i>
                    <p class="align-items-center ms-3 ">Jl. Aceh No.79, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat</p>
                </div>
                <div class="telfon d-flex align-items-center ps-5">
                    <i data-feather="phone-call"></i>
                    <p class="align-items-center ms-3">(022) 4207052 / 082130122784 (Pelayanan Darah)</p>
                </div>
                <div class="instagram d-flex align-items-center ps-5">
                    <i data-feather="instagram"></i>
                    <p class="align-items-center ms-3"><a href="../../style/404.html" style="text-decoration:none">pmikotabdg</a></p>
                </div>
                <div class="facebook d-flex align-items-center ps-5">
                    <i data-feather="facebook"></i>
                    <p class="align-items-center ms-3"><a href="../../style/404.html" style="text-decoration:none">PMI Kota Bandung</a></p>
                </div>
            </div>
      </footer>
      <div class="copy container-fluid">
        <p class="text-center py-2 text-white ">Copyright &copy; 2023 UTD PMI Kota Bandung. All rights reserved.</p>
     </div>
      <!-- footer end -->



      <!-- script -->
      <script>
        document.addEventListener("DOMContentLoaded", function () {
          const sukarelaRadio = document.getElementById("idSukarela");
          const penggantiRadio = document.getElementById("idPengganti");
          const apheresisRadio = document.getElementById("idApheresis");
          const keluargaRadio = document.getElementById("idKeluarga");
      
          const contPengganti = document.getElementById("cont-pengganti");
          const contKeluarga = document.getElementById("cont-keluarga");
      
          // Sembunyikan semua container saat halaman dimuat
          contPengganti.style.display = "none";
          contKeluarga.style.display = "none";
      
          // Tambahkan event listener untuk radio button
          sukarelaRadio.addEventListener("change", function () {
            contPengganti.style.display = "none";
            contKeluarga.style.display = "none";
          });
      
          penggantiRadio.addEventListener("change", function () {
            contPengganti.style.display = "block";
            contKeluarga.style.display = "none";
          });
      
          apheresisRadio.addEventListener("change", function () {
            contPengganti.style.display = "none";
            contKeluarga.style.display = "none";
          });
      
          keluargaRadio.addEventListener("change", function () {
            contPengganti.style.display = "none";
            contKeluarga.style.display = "block";
          });
        });
      </script>
      
      <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
          const homeTab = document.getElementById("nav-home-tab");
          const satuTab = document.getElementById("nav-satu-tab");
          const duaTab = document.getElementById("nav-dua-tab");
          const tigaTab = document.getElementById("nav-tiga-tab");
          const konfirmasiTab = document.getElementById("nav-konfirmasi-tab");
      
          const isiHome = document.getElementById("nav-home");
          const isiSatu = document.getElementById("nav-satu");
          const isiDua = document.getElementById("nav-dua");
          const isiTiga = document.getElementById("nav-tiga");
          const isiKonfirmasi = document.getElementById("nav-konfirmasi");
      
          isiHome.style.display = "none";
          isiSatu.style.display = "none";
          isiDua.style.display = "none";
          isiTiga.style.display = "none";
          isiKonfirmasi.style.display = "none";
      
          // Tambahkan event listener untuk radio button
          homeTab.addEventListener("change", function () {
          isiHome.style.display = "block";
          isiSatu.style.display = "none";
          isiDua.style.display = "none";
          isiTiga.style.display = "none";
          isiKonfirmasi.style.display = "none";
          });

          satuTab.addEventListener("change", function () {
          isiHome.style.display = "none";
          isiSatu.style.display = "block";
          isiDua.style.display = "none";
          isiTiga.style.display = "none";
          isiKonfirmasi.style.display = "none";
          });

          duaTab.addEventListener("change", function () {
          isiHome.style.display = "none";
          isiSatu.style.display = "none";
          isiDua.style.display = "block";
          isiTiga.style.display = "none";
          isiKonfirmasi.style.display = "none";
          });

          tigaTab.addEventListener("change", function () {
          isiHome.style.display = "none";
          isiSatu.style.display = "none";
          isiDua.style.display = "none";
          isiTiga.style.display = "block";
          isiKonfirmasi.style.display = "none";
          });

          konfirmasiTab.addEventListener("change", function () {
          isiHome.style.display = "none";
          isiSatu.style.display = "none";
          isiDua.style.display = "none";
          isiTiga.style.display = "none";
          isiKonfirmasi.style.display = "block";
          });
        });
      </script> -->
      
      
   
   
      <script>
        feather.replace();
      </script>


      <script src="../../js/bootstrap.bundle.min.js"></script>
      <!-- script end -->
  </body>
</html>
