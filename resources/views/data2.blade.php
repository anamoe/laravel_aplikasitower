
@foreach($kecamatan as $k)
	<h3>Data Tower Kecamatan {{$k->kecamatan}}</h3>
@endforeach

 <div class="row">
        <div class="col">
        	 <!--menghitung data pada total radio-->
            Total BTS : <?php echo $total_radio = $towers->where('id_jenis_tower',1)->count(); ?>
            <br>
            <!--menghitung data pada total bts-->
            Total Radio : <?php echo $total_bts = $towers->where('id_jenis_tower',2)->count(); ?>
        <br>
        </div>
        <div class="col">
        	<!--menghitung data pada total cctv-->
            Total CCTV : <?php echo $total_cctv = $towers->where('id_jenis_tower',3)->count(); ?>
            <br>
             <!--menghitung data pada total dll-->
            Total DLL : <?php echo $total_dll = $towers->where('id_jenis_tower',4)->count(); ?>
            <br>
        </div>
    </div>
    <!--menghitung data pada total keseluruhan tower-->
    <p><h5>Total Tower : <?php echo $total = $towers->count(); ?></h5></p>
<!--membuat tabel  --> 
<table class="table table-striped">
	<thead>
	<tr>
		<!--baris kolom tabel-->
		<th scope="col">No</th>
        <th scope="col">Desa</th>
        <th scope="col">Radio</th>
        <th scope="col">BTS</th>
        <th scope="col">CCTV</th>
        <th scope="col">DLL</th>
        <th scope="col">Total</th>
        <th scope="col">Total</th>
        
	</tr>
	</thead>
	
	<tbody>
		<!--membuat variabel i = 0-->
		<?php $i=1; ?>
			<!--membuat perulanga foreach dengan variabel data sebagai variabel d-->
			@foreach($data as $d)
			<tr>
				<!--perulangan dengan penambahan 1-->
				<td>{{$i++}}</td>
				<!--memanggil variabel desa-->
				<td>{{$d->desa}}</td>

				<td>
					<!--menghitung data pada total tower Radio-->
					<?php echo $radio = $towers->where('id_desa',$d->id_desa)->where('id_jenis_tower','2')->count(); ?>
				</td>

				<td>
					<!--menghitung data pada total tower  BTS-->
					<?php echo $bts = $towers->where('id_desa',$d->id_desa)->where('id_jenis_tower','1')->count(); ?>
				</td>

				<td>
					<!--menghitung data pada total tower CCTV-->
					<?php echo $cctv = $towers->where('id_desa',$d->id_desa)->where('id_jenis_tower','3')->count(); ?>
				</td>

				<td>
					<!--menghitung data pada total tower DLL-->
					<?php echo $dll = $towers->where('id_desa',$d->id_desa)->where('id_jenis_tower','4')->count(); ?>
				</td>

				<td>
				 	<!--menghitung data pada total tower  -->
		            <?php echo $total = $towers->where('id_desa',$d->id_desa)->count(); ?>
		         </td>

		         <td>
		         	<!--membuat button Detail-->
		         	<a href="{{route('users.edit',$d->id_desa)}}" class="btn btn-primary">Lihat Tower</a>
		        </td>
			</tr>
			@endforeach

	</tbody>
	
	
</table>


