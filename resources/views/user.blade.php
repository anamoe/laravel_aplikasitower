<title>Halaman Data Tower</title>
@extends('layouts.layouts-user')

@section('judul')
    <h2>Data Tower</h2>
@stop

@section('css')
    //membuat backgound image
    body{background-image: url(image/turret.jpg);}
    
@stop

@section('content_marker')
    //Konten Kotak dan membuat array
    var infoWindowContent =
     '<div class="info_content">' +
     '<h3>'+array[i][2]+'</h3>' +
     '<img width="200" src="images/'+array[i][3]+'"/><br/>' +
     'Tinggi : '+array[i][4] + ' Meter <br/>'+
     'Alamat : '+array[i][4] + ' Meter'+
     '</div>';
@stop
@section('sidebar')
    
<h4>Data Tower Kabupaten Jember</h4>
    <div class="row">
        <div class="col">
            <!--menghitung data pada total tower Radio-->
            Total BTS : <?php echo $total_radio = $towers->where('id_jenis_tower',1)->count(); ?>
            <br>
            <!--menghitung data pada total tower  BTS-->
            Total Radio : <?php echo $total_bts = $towers->where('id_jenis_tower',2)->count(); ?>
        <br>
        </div>
        <div class="col">
            <!--menghitung data pada total tower CCTV-->
            Total CCTV : <?php echo $total_cctv = $towers->where('id_jenis_tower',3)->count(); ?>
            <br>
            <!--menghitung data pada total tower DLL-->
            Total DLL : <?php echo $total_dll = $towers->where('id_jenis_tower',4)->count(); ?>
            <br>
        </div>
    </div>
    <!--menghitung data pada total tower  -->
    <p><h5>Total Tower : <?php echo $total = $towers->count(); ?></h5></p>
    
<!--membuat table tower-->
<table class="table table-striped">
    <thead>
         <tr>  
                <!--membuat kolom baris-->
                <th scope="col">No</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Radio</th>
                <th scope="col">BTS</th>
                <th scope="col">CCTV</th>
                <th scope="col">DLL</th>
                <th scope="col">Total</th>
                <th scope="col">Aksi</th>

        </tr>
    </thead>

    <tbody>
            @if($kecamatan)
                <!--membuat variabel i = 0-->
                <?php $i=1;?>
                <!-- perulangan foreach dengan variabel kecamatan sebagai variabel kec -->
                @foreach($kecamatan as $kec)
                <tr>
                    <!--perulangan dengan penambahan 1-->
                    <td>{{$i++}}</td>
                    <!--mengambil tabel kecamtan-->
                    <td>{{$kec->kecamatan}}</td>
                    <td>
                        <!--menghitung data pada total tower Radio-->
                        <?php echo $radio = $towers->where('id_kec',$kec->id_kecamatan)->where('id_jenis_tower','2')->count(); ?>
                    </td>

                    <td>
                        <!--menghitung data pada total tower  BTS-->
                        <?php echo $bts = $towers->where('id_kec',$kec->id_kecamatan)->where('id_jenis_tower','1')->count(); ?>
                    </td>

                    <td>
                        <!--menghitung data pada total tower CCTV-->
                        <?php echo $cctv = $towers->where('id_kec',$kec->id_kecamatan)->where('id_jenis_tower','3')->count(); ?>
                    </td>

                    <td>
                        <!--menghitung data pada total tower DLL-->
                        <?php echo $dll = $towers->where('id_kec',$kec->id_kecamatan)->where('id_jenis_tower','4')->count(); ?>
                    </td>

                    <td>
                        <!--menghitung data pada total tower  -->
                        <?php echo $total = $towers->where('id_kec',$kec->id_kecamatan)->count(); ?>
                    </td>

                    <td>
                        <!--membuat button Detail-->
                        <a href="{{route('users.show',$kec->id_kecamatan)}}" class="show-modal btn btn-primary" id="show-modal">Detail</a>
                    </td>

                 </tr>

                @endforeach

            @endif

    </tbody>
            
    </table>
   

    <!-- Start Modal -->
    <div class="modal fade" id="show" role="dialog" data-backdrop="static">

      <div class="modal-dialog modal-dialog-centered modal-xl">

        <div class="modal-content">

              <!-- Content Modal -->
              <div class="modal-body" id="modal-body">
                   <p>ID : </p>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>

        </div>

      </div>

    </div>

    <!-- End Modal -->

    <!-- Fungsi Show Detail menggunakan ajax -->
    <script type="text/javascript">
            $('body').on('click', '#show-modal',function(event){
                event.preventDefault();
                var me = $(this),
                    url = me.attr('href'),
                    title = me.attr('title');

                $('#modal-title').text('Data Tower');

                $.ajax({
                    url: url,
                    dataType: 'html',
                    success: function (response){
                        $('#modal-body').html(response);
                    }
                });

                $('#show').modal('show');
             });
    </script>

@stop