<title>Halaman Tambah Tower</title>
@extends('layouts.layouts')





@section('mapInput')

	//==========================Map Input=====================================

        //Cek Support Geolocation
        if(navigator.geolocation){

            //Mengambil Fungsi golocation
            navigator.geolocation.getCurrentPosition(lokasi);

        }
        else{

            alert("Maaf Browser tidak Support HTML 5");
        }

        
        //Variabel Marker

        var markerClick;

        //Tombol Hapus
        var hapus = document.getElementById('btn_hapus');

        hapus.addEventListener('click', function() {
            markerClick.setMap(null);
            navigator.geolocation.getCurrentPosition(lokasi);

        });

        //Fungsi untuk geolocation
            function lokasi(position){

                //Mengirim data koordinat ke form input
                document.getElementById("lat").value = position.coords.latitude;
                document.getElementById("leng").value = position.coords.longitude;

                //Current Location
                var lat = position.coords.latitude;
                var long = position.coords.longitude;
                var latlong = new google.maps.LatLng(lat, long);

                 //Buat Peta
                var propertiPeta2 = {
                    center:latlong,
                    zoom: 10,
                    mapTypeControl: true,
                    disableDoubleClickZoom: true,
                    navigationControlOptions: {style:google.maps.NavigationControlStyle.SMALL}
                }

                var peta2 = new google.maps.Map(document.getElementById("mapInput"), propertiPeta2);

                //Current Marker 
                 var currentMarker = new google.maps.Marker({
                        position: latlong, 
                        icon : 'https://img.icons8.com/office/50/000000/street-view.png',
                        map: peta2, 
                        title: "Anda Disini"
                    }); 

                //Membuat Marker Map dengan Double Klik

                var latLng = new google.maps.LatLng(-8.2493419,113.7516165);

                
                var addMarkerClick = google.maps.event.addListener(peta2,'dblclick',function(event) {
                    
                    markerClick = new google.maps.Marker({
                        position: event.latLng, 
                        map: peta2, 
                        title: event.latLng.lat()+', '+event.latLng.lng()
                    }); 

                    currentMarker.setMap(null);

                    google.maps.event.removeListener(addMarkerClick);

                   
                    //Kirim data ke form input dari double klik
                    document.getElementById("lat").value = event.latLng.lat();
                    document.getElementById("leng").value = event.latLng.lng(); 
                   
                    
                });

            }
    
@stop

@section('gambar')
    '<img width="200" src="images/'+array[i][3]+'"/><br/>' +
@stop

@section('content_marker')
     //Konten Kotak
    var infoWindowContent =
     '<div class="info_content">' +
     '<h3>'+array[i][2]+'</h3>' +
     '<img width="200" src="../images/'+array[i][3]+'"/><br/>' +
     'Tinggi : '+array[i][4] + ' Meter <br/>'+
     'Alamat : '+array[i][4] + ' Meter'+
     '</div>';
@stop

@section('sidebar')
    
    <div class="row">

        <div class="col-lg">

            <h3>Tambah Lokasi Tower</h3>

            <!-- Map Input -->
            <div id="mapInput" style="width: 100%; height: 300px; padding: 20px;border-radius: 3px;"></div>
            <br>
            <p><button class="btn btn-danger" id="btn_hapus">Hapus Lokasi</button></p>
            
        </div>
        
    </div>

	<form action="{{route('tower.store')}}" method="post" enctype="multipart/form-data" file="true">
		{{ csrf_field() }}

        <label>Titik Koordinat Lat</label>
        
        <input type="number" step="any" id="lat" name="koor_lat" class="form-control {{$errors->has('koor_lat') ? 'is-invalid' : '' }}">
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
              Foto Tidak Valid
            </div>
        @endif
	    
	    <div class="text-center mt-4">

	        <button class="btn btn-primary" style="width: 100%;">Tambah Tower</button>
            @include('sweet::alert')


	    </div>

	</form>
    
   
@stop