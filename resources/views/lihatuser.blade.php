@extends('layouts.template1')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title> Halaman Edit User</title>
</head>
	<body>
			<h4 style="padding: 20px;">Data Userr</h4>

					 
                     <div class="col-md">
                        <form action="{{route('cariuser')}}" method="get" enctype="multipart/form-data" file="true">                                                                           
		                    <input type="text" name="search" placeholder="Search...">                  
							<a href=""> <button class="btn btn-primary" type="submit"></i> Cari</button></a>
							<table class="table table-striped">
				 		</form>
					</div>

				<thead>
					<tr>
						<th scope="col">Nomor</th>
						<th scope="col">Nama</th>
				        <th scope="col">Username</th>
				        <th scope="col">Role</th>
				        <th scope="col">Aksi</th>		        
					</tr>
				</thead>

				<tbody>
					<!--membuat variabel i = 1-->
					<?php $i=1; ?>

					<!--membuat perulanga foreach dengan variabel data sebagai variabel d-->
					@foreach($users as $t)

					<tr>
					<!--perulangan dengan penambahan 1-->
						<td>{{$i++}}</td>
						<!--memanggil variabel user-->
						<td>{{$t->nama}}</td>
						<td>{{$t->username}}</td>       
						<td>{{$t->role->name}}</td>        					       
						<td>
		  					 <!--membuat button Edit-->
							  <a href="{{route('updateuser',$t->id)}}" class="btn btn-primary">Edit</a>
							  
							   <!--membuat button Hapus-->
							  <a href="{{route('hapus', $t->id)}}" class="btn btn-danger">Hapus</a>
							
						</td>
				
					</tr>
							@endforeach
							
							@include('sweet::alert')  
				</tbody>

		    </table>

	</body>

</html>
	

@stop