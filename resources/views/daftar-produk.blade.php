@extends('layout/main');
@section('container')
    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/tendabagus2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>SEMUA PRODUK</h1>
                <p class="mb-0">Pilih produk yang diinginkan</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left border-primary">
            <h2 class="font-weight-light text-primary">Yang Paling Direkomendasikan</h2>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-6">
          @foreach($barang as $b)
            <div class="d-block d-md-flex listing">
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
    
    