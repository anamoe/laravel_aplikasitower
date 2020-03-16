<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		
	</style>
</head>
<body>
 <style type="text/css">
		table tr td,
		table tr th{
			font-size: 6pt;
		}
	</style>
	<div class="container-fluid">
		<center>
			<h4>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
			
		</center>
		<br/>
		
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Desa</th>
					<th>Kecamatan</th>
					<th>Koordinat</th>
					<th>Tinggi</th>
					<th>Tanggal IMB</th>
					<th>Provider</th>
					<th>Sewa/Milik</th>
					<th>Akhir Sewa</th>
					<th>Pemilik</th>
					
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($towers as $p)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$p->nama_tower}}</td>
					<td>{{$p->alamat}}</td>
					<td>{{$p->id_desa}}</td>
					<td>{{$p->id_kec}}</td>
					<td>{{$p->koor_lat}}<br/>{{$p->koor_leng}}</td>
					<td>{{$p->tinggi}}</td>
					<td>{{$p->tanggal_imb}}</td>
					<td>{{$p->id_provider1}}</td>
					<td>{{$p->ket_pemilik}}</td>
					<td>{{$p->akhir_sewa}}</td>
					<td>{{$p->nama_pemilik_lahan}}</td>

				</tr>


				@endforeach
			</tbody>
		</table>
 
	</div>
 
</body>
</html>