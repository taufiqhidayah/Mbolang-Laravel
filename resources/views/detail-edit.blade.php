@extends('layout/main');
@section('container')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>Tambahkan Data</h1>
            
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg"  data-aos="fade">

            
          @foreach($barang as $b)
            <form action="/edit/update" method="post" class="p-5 bg-white" >
            {{ csrf_field() }}
            <input type="hidden" name="id_barang" value="{{$b->id_barang }}"> <br/>
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nama Barang</label>
                  <input type="text" name="nama_barang" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Deskripsi</label>
                  <input type="text" name="deskripsi" value="{{$b ->deskripsi}}"  id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="lname">Nama Penjual </label> 
                  <input type="text" name="nama_penjual" value="{{$b ->nama_penjual}}"  id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Harga </label> 
                  <input type="subject" name="harga" value="{{$b ->harga}}"  id="subject" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Kategori </label> 
                  <input type="subject" name="kategori" value="{{$b ->kategori}}"  id="subject" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Gambar </label> 
                  <input type="subject" name="gambar" value="{{$b ->gambar}}"  id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Lokasi</label> 
                  <input type="subject"  value="{{$b ->lokasi}}"  name="lokasi" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Update" class="btn btn-primary py-2 px-4 text-white">
                  <a href="/edit/hapus/{{$b->id_barang}}">Hapus</a>
                </div>
              </div>

            </form> 
            
            @endforeach
          </div>
         
        </div>
      </div>
    </div>  

    @endsection