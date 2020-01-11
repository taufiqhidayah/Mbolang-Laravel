@extends('layout/main')
@section('container')
  @foreach($barang as $p)
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('/images/pante.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>Tenda Bertipe 7</h1>
                <p class="mb-0">{{$p->lokasi}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="col-15 text-left border-primary">
              <h3 class="font-weight-light text-primary">{{$p->nama_barang}}</h3>
            </div>

            <div class="mb-4">
              <div class="slide-one-item home-slider owl-carousel">
                <div><img src="{{$p->gambar}}" alt="Image" class="img-fluid"></div>
                
              </div>
            </div>
            
            <h4 class="h5 mb-4 text-black">Deskripsi</h4>
            <p>{{$p->deskripsi}}.</p>
            <!-- <p>Tenda ini </p>
            <p>Tenda adalah .....</p>
            <p>Tenda adalah ....</p> -->

          </div>
          <div class="col-md-5 ml-auto bg-light">
            <h3 class="font-weight-light text-black">{{$p->harga}}</h3>

            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            <br><br>
            <h5><b>PELAPAK</b></h5>
            <div class="row">
              <div class="col-2">
                <img src="/images/person_3.jpg" class="rounded-circle" width="50px" height="50px">
              </div>
              <div class="col-8">
                <b><i>{{$p->nama_penjual}}</i></b><br>
                <span class="icon icon-room">{{$p->lokasi}}</span>
              </div>
            </div><br><br>
            <form>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Nama Tokoh</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="BigBang">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-4">Tanggal Sewa</div>
                <div class="col-sm-6">
                <div class="form-group">
            <div class="input-group date" id="datetimepicker">
                <input type="date" id="datefield" class="form-control" />	<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
            </div>
        </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-4">Tanggal Dikembalikan</div>
                <div class="col-sm-6">
                <div class="form-group">
            <div class="input-group date" id="datefield">
                <input  type="date" id="datefield1" class="form-control" />	<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
            </div>
        </div>
                </div>
              </div>
            </form>
            <div class="row">
              <a href="/pemesanan" class="btn btn-primary btn-block">Booking</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  @endforeach
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
    <script type="text/javascript">
  var todayMin = new Date();
var dayMin = todayMin.getDate();
var monthMin = todayMin.getMonth() + 1;
var yearMin = todayMin.getFullYear();

 if(dayMin<10){
    dayMin='0'+dayMin
 } 
 if(monthMin<10){
    monthMin='0'+monthMin
 } 

todayMin = yearMin+'-'+monthMin+'-'+dayMin;

var todayMax = new Date();
var dayMax = todayMax.getDate() + 10;
var monthMax = todayMax.getMonth() + 1; //January is 0!
var yearMax = todayMax.getFullYear();

 if(dayMax<10){
    dayMax='0'+dayMax
 } 
 if(monthMax<10){
    monthMax='0'+monthMax
 } 

todayMax = yearMax+'-'+monthMax+'-'+dayMax;

document.getElementById("datefield").setAttribute("min", todayMin);
document.getElementById("datefield").setAttribute("max", todayMax);

document.getElementById("datefield1").setAttribute("min", todayMin);
document.getElementById("datefield1").setAttribute("max", todayMax);
    </script>
    @endsection