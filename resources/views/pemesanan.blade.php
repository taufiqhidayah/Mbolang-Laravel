@extends('layout/main');

@if (session('status'))
                    <div class="alert alert-success">
                     {{ session('status') }}
                        </div>
                    @endif

@section('container')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/pante.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>Tenda Bertipe 7</h1>
                <p class="mb-0">Dinoyo, Malang</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12" style="text-align: center;">
           <a href="/kirimemail"> <h2 id="kodee" style="text-align: center; color: ">Kode Booking Anda</h2></a><br>
            <button id="tombol" type="button" class="btn btn-outline-primary" style="text-align: center; width: 150px;">Kode</button>
            <h3 id="kode" style="text-align: center; font-weight: bold; font-family: comic sans ms; font-style: italic; color:#ff0000; font-size: 13pt"></h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
      </div>
    </div>
    
    <div class="site-section bg-white">
      <div class="container">
      </div>
    </div>


    <div class="newsletter bg-primary py-3">
      <div class="container">
    
      </div>
    </div>

@endsection