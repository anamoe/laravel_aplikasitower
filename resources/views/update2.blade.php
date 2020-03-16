<!DOCTYPE html>
<html>
    <title>Halaman Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



    <style type="text/css">

        body {
            margin: 0;
            padding: 0;
             background: #092B5E;
           
            
        }
        #login .container #login-row #login-column #login-box {

            margin: 180px auto;
            width: 100%;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }
        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }
        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }

        .login{
            width: 100%;
        }

        .navbar{
            width: 100%;
            z-index: 100;
            position: fixed;
            background: #89C4F4;
            color: #ffffff;
            
        }
        .navbar-nav{
            background: #89C4F4;
            width: 100%;
            padding-right: 50px;
            color: #fff;
        }

    
        .nav-item{
            
            padding-right: 20px;
        }

        .navbar-brand{
            padding-left: 20px;
            color: #1366e8;
            text-decoration: none;
        }
        .content{
            overflow: auto;
            padding: 20px;
        }


    </style>
    <!------- Include the above in your HEAD tag --------->
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="{{route('tower.index')}}"><img src="http://diskominfo.jemberkab.go.id/assets/images/logo_kominfo_jember.png" alt="" style="width:250px">
      </a>

      <h6>Sistem Informasi Tower<br>Kabupaten Jember</h6>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav justify-content-end">
       
          <li class="nav-item active">
            <a class="nav-link" href="{{route('tower.index')}}">HASIL</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="{{route('tower.create')}}">TAMBAH TOWER</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="{{route('halaman_daftar')}}">TAMBAH AKUN</a>
          </li>
          <li class="nav-item active">

            <div class="dropdown show">

              <a class="btn btn-primary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Auth::user()->nama}}
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                
              </div>
            </div>
            
          </li>
          
        </ul>
      </div>
    </nav>

    <div id="login">

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md">
                    <div id="login-box" class="col-md-12 content">
                        <h4 style="padding: 10px; text-align: center; background:#092B5E; color: #fff;">Edit Data Tower</h4>
                        <div class="row" style="padding: 20px;">
                            <div class="col-md text-center">
                                <h4>Foto Tower {{$towers->nama_tower}}</h4>
                                <img height="200" src="../images/{{$towers->foto->foto}}" />
                            </div>

                            <div class="col-md">
                                <form action="{{route('tower.update',$towers->id)}}" method="POST" enctype="multipart/form-data" file="true">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                   

                                    <label>Titik Koordinat Lat</label>
                                    
                                    <input type="number" step="any" id="lat" name="koor_lat" value="{{$towers->koor_lat}}" class="form-control {{$errors->has('koor_lat') ? 'is-invalid' : '' }}">
                                    @if($errors->has('koor_lat'))
                                        <div class="invalid-feedback">
                                                Tidak Valid
                                        </div>
                                    @endif
                                    <label>Titik Koordinat Leng</label>
                                    
                                    <input type="number" step="any" id="leng" name="koor_leng" class="form-control {{$errors->has('koor_leng') ? 'is-invalid' : '' }}">
                                     @if($errors->has('koor_leng'))
                                        <div class="invalid-feedback">
                                          Tidak Valid
                                        </div>
                                    @endif
                                    
                                    <label>Nama Perusahaan</label>
                                    
                                    <input type="text" name="nama_tower" placeholder="Nama Perusahaan"class="form-control {{$errors->has('nama_tower') ? 'is-invalid' : '' }}">
                                     @if($errors->has('nama_tower'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi
                                        </div>
                                    @endif

                                     @if($errors->has('akhirs_sewa'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi!
                                        </div>
                                    @endif
                                    <label>Alamat</label>
                                   
                                    <input type="text" name="alamat" placeholder="Alamat" class="form-control {{$errors->has('alamat') ? 'is-invalid' : '' }}">
                                    @if($errors->has('alamat'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi!
                                        </div>
                                    @endif
                                    <br>
                                    <div class="row">

                                        <div class="col-md">

                                            <label>Rt.</label>
                                            <input type="text" name="rt" id="form-name" placeholder="Rt." class="form-control {{$errors->has('rt') ? 'is-invalid' : '' }}">
                                             @if($errors->has('rt'))
                                                <div class="invalid-feedback">
                                                  Wajib di Isi!
                                                </div>
                                            @endif
                                            <br>

                                        </div>

                                        <div class="col-md">

                                            <label for="form-name">Rw.</label>
                                            <input type="text" name="rw" id="form-name" placeholder="Rw."class="form-control {{$errors->has('rw') ? 'is-invalid' : '' }}">
                                            @if($errors->has('rw'))
                                                <div class="invalid-feedback">
                                                  Wajib di Isi!
                                                </div>
                                            @endif
                                            <br>

                                        </div>

                                    </div>
                                
                                    <label>Kecamatan</label>

                                    <select name="id_kec" id="kecamatan" class="form-control kecamatan {{$errors->has('id_kec') ? 'is-invalid' : '' }}">

                                        @if($data_kec)
                                                <option selected disabled> -- Pilih Kecamatan -- </option>
                                            @foreach($data_kec as $kec)

                                                <option value="{{$kec->id_kecamatan}}">{{"$kec->kecamatan"}}</option>

                                            @endforeach

                                        @endif

                                    </select>
                                    @if($errors->has('id_kec'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi!
                                        </div>
                                    @endif

                                    <label>Desa</label>

                                    <select name="id_desa" class="form-control desa {{$errors->has('id_desa') ? 'is-invalid' : '' }}">
                                        
                                        <option id="desa" value=""></option>

                                    </select>
                                    @if($errors->has('id_desa'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi!
                                        </div>
                                    @endif


                                    <script type="text/javascript">
                                        $(document).on('change','.kecamatan', function(){
                                            //console.log("bisa");

                                            var id = $(this).val();
                                            var div = $(this).parent();

                                            var option = "";

                                            //console.log(id);

                                            $.ajax({

                                                type: 'get',
                                                url: '{!!URL::to('desa')!!}',
                                                data: {'id':id},
                                                success: function(data){
                                                    //console.log('success');
                                                   // console.log(data);
                                                   // console.log(data.length);

                                                    option+='<option value="0" selected disable> -- Pilih Desa --</option>';

                                                    for (var i = 0; i <data.length; i++) {
                                                        
                                                        option+='<option value="'+data[i].id_desa+'">'+data[i].desa+'</option>';
                                                    }

                                                    div.find('.desa').html(" ");
                                                    div.find('.desa').append(option);

                                                },
                                                error: function(){

                                                }
                                            });
                                        });
                                    </script>

                                    <label>Jenis Tower</label>

                                    <select name="id_jenis_tower" class="form-control {{$errors->has('id_jenis_tower') ? 'is-invalid' : '' }}">
                                        <option disabled selected> -- Pilih Jenis Tower --</option>
                                        @if($data_jenis_tower)

                                            @foreach($data_jenis_tower as $jenis_tower)

                                                <option value="{{$jenis_tower->id}}">{{$jenis_tower->nama_tower}}</option>

                                            @endforeach

                                        @endif
                                        
                                    </select>
                                    @if($errors->has('id_jenis_tower'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi!
                                        </div>
                                    @endif

                                    <label>Ketinggian</label>
                                    <input type="text" name="tinggi" placeholder="Ketinggian" class="form-control {{$errors->has('tinggi') ? 'is-invalid' : '' }}">
                                     @if($errors->has('tinggi'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi!
                                        </div>
                                    @endif
                                     <label>Pemilik Tower</label>
                                    <input type="text" name="nama_pemilik_tower" placeholder="Pemilik Tower" class="form-control {{$errors->has('nama_pemilik_tower') ? 'is-invalid' : '' }}">
                                    @if($errors->has('nama_pemilik_tower'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi!
                                        </div>
                                    @endif

                                    <label for="select">Provider 1</label>
                                    <select name="id_provider1" class="form-control {{$errors->has('id_provider1') ? 'is-invalid' : '' }}">
                                        <option disabled selected> -- Pilih Provider 1 --</option>
                                         @if($data_provider)

                                            @foreach($data_provider as $provider)

                                                <option value="{{$provider->id}}">{{$provider->nama_provider}}</option>

                                            @endforeach

                                        @endif

                                    </select>
                                    @if($errors->has('id_provider1'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi!
                                        </div>
                                    @endif

                                    <label for="select">Provider 2 : <i>Jika ada</i></label>
                                    <select name="id_provider2" class="form-control">
                                        <option disabled selected> -- Pilih Provider 2 --</option>
                                         @if($data_provider)

                                            @foreach($data_provider as $provider)

                                                <option value="{{$provider->id}}">{{$provider->nama_provider}}</option>

                                            @endforeach

                                        @endif

                                    </select>
                                    
                                    <label for="select">Provider 3 : <i>Jika ada</i></label>
                                    <select name="id_provider3" class="form-control">
                                        <option disabled selected> -- Pilih Provider 3 --</option>
                                         @if($data_provider)

                                            @foreach($data_provider as $provider)

                                                <option value="{{$provider->id}}">{{$provider->nama_provider}}</option>

                                            @endforeach

                                        @endif

                                    </select>
                                

                                   
                                    <label>Tanggal IMB</label>
                                    <input type="date" name="tanggal_imb" class="form-control {{$errors->has('tanggal_imb') ? 'is-invalid' : '' }}">
                                    @if($errors->has('tanggal_imb'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi!
                                        </div>
                                    @endif
                                    <label>Sewa atau Milik Perusahaan</label>
                                    <input type="text" name="ket_pemilik" placeholder="Sewa atau Milik Perusahaan" class="form-control {{$errors->has('ket_pemilik') ? 'is-invalid' : '' }}">
                                    @if($errors->has('ket_pemilik'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi!
                                        </div>
                                    @endif
                                    <label>Akhir Masa Sewa</label>
                                    <input type="date" name="akhir_sewa" class="form-control {{$errors->has('akhir_sewa') ? 'is-invalid' : '' }}">
                                    @if($errors->has('akhirs_sewa'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi!
                                        </div>
                                    @endif
                                
                                    <label>Pemilik Lahan</label>
                                    <input type="text" name="nama_pemilik_lahan" placeholder="Pemilik Lahan" class="form-control {{$errors->has('nama_pemilik_lahan') ? 'is-invalid' : '' }}">
                                    @if($errors->has('nama_pemilik_lahan'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi!
                                        </div>
                                    @endif

                                    <label>Foto Tower : <i>Maksimal 1 Mb</i></label>
                                    <p><input type='file' name='id_foto' class="form-control {{$errors->has('id_foto') ? 'is-invalid' : '' }}"></p>
                                    @if($errors->has('id_foto'))
                                        <div class="invalid-feedback">
                                          foto tidak valid
                                        </div>
                                    @endif
                                    
                                    <div class="text-center mt-4">

                                        <button class="btn btn-primary" style="width: 100%;">Update Tower</button>

                                    </div>

                                </form>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
