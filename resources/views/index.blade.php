@extends('layout/main');

    <div class="site-blocks-cover overlay" style="background-image: url(images/Mountain-HD-Wallpapers-1080p.JPEG);"
      data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-12">
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 class="" data-aos="fade-up"><i>Cari Kebutuhan Mbolangmu Disini</i></h1>
                <p data-aos="fade-up" data-aos-delay="100">"Great Things Never Come in Comfort Zone"</p>
              </div>
            </div>

            <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
              <form  action="/cari" method="GET">
                <div class="row align-items-center">
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-10">
                    <input type="text" name="cari"  class="form-control rounded" placeholder="Cari Produk">
                  </div>
                 
                  <div class="col-lg-12 col-xl-2 text-right">
                    <a class="btn btn-primary btn-block rounded" href="daftar-produk-tenda.html"><i
                        class="fas fa-search"></i></a>
                 
                  </div>

                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">


        <div class="site-section" data-aos="fade">
            <div class="container">
              <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                  <h2 class="font-weight-light text-primary"><strong><i>mBolang</i></strong></h2>
                  <p class="color-black-opacity-25">
                    <strong>mBolang</strong>
                    adalah jawaban bagi kalian yang kesusahan mencari referensi <strong>tempat penyewaan alat-alat dan motor
                      adventure.</strong> mBolang menyediakan barang yang berkualitas tinggi dan terpercaya yang menjangkau
                    berbagai daerah di Indonesia.
                  </p>
                  </p>
                </div>
              </div>
            </div>
          </div>
      
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center border-primary">
            <h2 class="font-weight-light text-primary">
              <strong><i>Yang Paling Populer</i></strong>
            </h2>
          </div>
        </div>

        <div class="row justify-content-center mb-5">
          <div class="col-12  block-13">
            <div class="owl-carousel nonloop-block-13">
            <!-- VIEW -->
            @foreach($barang as $b)
              <div class="d-block d-md-flex listing vertical">
                <a href="/detail-produkTenda/{{$b->id_barang}}" class="img d-block" style="background-image: url('{{$b->gambar}}')"></a>
                <div class="lh-content">
                  <span class="category">{{$b ->kategori}}</span>
                  <!-- <a href="#" class="bookmark"><span class="icon-heart"></span></a> -->
                  <h3><a href="/detail-produk/{{$b->id_barang}}">{{$b ->nama_barang}}</a></h3>
                  <address>{{$b-> lokasi}}</address>
                </div>
              </div>
            @endforeach
             
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center border-primary">
            <h2 class="font-weight-light text-primary"><strong><i>Tempat Travelling yang sering dikunjungi</i></strong>
            </h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12  block-13">
            <div class="owl-carousel nonloop-block-13">
              <div class="d-block d-md-flex listing vertical">
                <a href="#" class="img d-block" style="background-image: url('images/bromo.jpg')"></a>
                <div class="lh-content">
                  <h3><a href="#">Gunung Bromo</a></h3>
                  <address>Probolinggo, Jawa Timur</address>
                </div>
              </div>
              <div class="d-block d-md-flex listing vertical">
                <a href="#" class="img d-block" style="background-image: url('images/pantaibale.jpg')"></a>
                <div class="lh-content">
                  <h3><a href="#">Pantai Balekambang</a></h3>
                  <address>Malang, Jawa Timur</address>
                </div>
              </div>
              <div class="d-block d-md-flex listing vertical">
                <a href="#" class="img d-block" style="background-image: url('images/airterjun.jpg')"></a>
                <div class="lh-content">
                  <h3><a href="#">Air Terjun</a></h3>
                  <address>Malang, Jawa Timur</address>
                </div>
              </div>
              <div class="d-block d-md-flex listing vertical">
                <a href="#" class="img d-block" style="background-image: url('images/danau.jpg')"></a>
                <div class="lh-content">
                  <h3><a href="#">Danau Toba</a></h3>
                  <address>Medan, Sumatra Utara</address>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-white">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center border-primary">
            <h2 class="font-weight-light text-primary"><strong><i>Cara Kerja</i></strong></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <img src="images/daftar.png" width="100px" height="100px"><br>
            <p style="font-family: cursive; font-size: 15pt"><strong><i>1. Pendaftaran Akun</i></strong></p>
            <p>Daftarkan akun anda terlebih dahulu agar dapat melakukan akses ke website
              <strong><i>mBolang.</i></strong></p>
          </div>
          <div class="col-md-4 text-center">
            <img src="images/listitem.png" width="80px" height="100px"><br>
            <p style="font-family: cursive; font-size: 15pt"><strong><i>2. Pilih Kategori Item</i></strong></p>
            <p>Kami menyediakan berbagai kategori item, mulai dari Tenda, Tas Camping hingga kendaraan motor Trail,
              silahkan pilih salah satu item atau bisa memilih lebih dari satu item.</p>
          </div>
          <div class="col-md-4 text-center">
            <img src="images/booking.png" width="80px" height="100px">
            <p style="font-family: cursive; font-size: 15pt"><strong><i>3. Pemesanan</i></strong></p>
            <p>Lakukan pemesanan agar dapat kami proses dan secepatnya akan kami sampaikan pesan berupa kode untuk
              mengambil item nya.</p>
          </div>
        </div>
      </div>
    </div>
