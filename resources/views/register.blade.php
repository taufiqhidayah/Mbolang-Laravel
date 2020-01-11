   @extends('layout/main'); 
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/sepeda.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>Daftar</h1>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 mb-5"  data-aos="fade">
            <form action="/register" method="post" class="p-5 bg-white">
            @csrf
              <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <input required="true" name="name" type="text" class="form-control" id="inputEmail3" placeholder="Masukkan Nama Lengkap">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input required="true" name="email" type="email" class="form-control" id="inputEmail3" placeholder="Masukkan Alamat Email">
                </div>
              </div>
              @if ($errors->has('email'))
                <div class="invalid-feedback">
                  {{$errors->first('email')}}
                </div>
              @endif
              <div class="form-group row">
                <label  for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input required="true" type="name" name="password" class="form-control" id="inputPassword3" placeholder="Masukkan Password Akun">
                </div>
              </div>
              <!-- <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Laki-Laki
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
              </fieldset> -->
              <div class="form-group row">
                <div class="col-sm-2">Tanggal Lahir</div>
                <div class="col-sm-10">
                  <input required="true" name="tgllahir" type="Date" name="bday">
                </div>
              </div>
              <!-- <div class="form-group row">
                <div class="col-sm-2">Scan K.Identitas</div>
                <div class="col-sm-10">
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                  <small id="bantuan" class="form-text text-muted">Dapat berupa KTP, KTM (Kartu Tanda Mahasiswa atau Kartu Tanda Pelajar).</small>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2">Scan SIM C</div>
                <div class="col-sm-10">
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                  <small id="bantuan" class="form-text text-muted">Optional apabila ingin menyewa motor.</small>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2">Daftar Sebagai</div>
                <div class="col-sm-2">
                  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Pilih ...</option>
                    <option value="1">Customer</option>
                    <option value="2">Vendor</option>
                  </select>
                </div>
              </div> -->
              <div class="form-group row">
                <div class="col-sm-2">Finalisasi</div>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input required="true" class="form-check-input" type="checkbox" id="gridCheck1" require>
                    <label class="form-check-label" for="gridCheck1">
                      Saya Setuju dengan semua persyaratan yang berlaku
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary text-white">Buat Akun</button>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

    
    <div class="newsletter bg-primary py-3">
      <div class="container">
        <!-- <div class="row align-items-center">
          <div class="col-md-6">
            <h2>Newsletter</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="col-md-6">
            
            <form class="d-flex">
              <input type="text" class="form-control" placeholder="Email">
              <input type="submit" value="Subscribe" class="btn btn-white"> 
            </form>
          </div>
        </div> -->
      </div>
    </div>
