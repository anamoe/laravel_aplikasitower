@extends('layouts.template2')
@section('konten')


	<h4 style="padding: 20px;">Data User</h4>
	<form action="{{route('prosesupdateuser',$users->id)}}" method="POST" enctype="multipart/form-data" file="true">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
       
       <div class="container">

       				<label>Nama</label>   

                         <input type="text" step="any" id="nama" name="nama" value="{{$users->nama}}" class="form-control {{$errors->has('nama') ? 'is-invalid' : '' }}">
                                     @if($errors->has('nama'))
                                        <div class="invalid-feedback">
                                          Wajib di Isi
                                        </div>
                                    @endif   
                                                           
       				<label>Username</label>  

                         <input type="text" step="any" id="username" name="username" value="{{$users->username}}" class="form-control ">

                    <label>Password</label>  

                         <input type="password" step="any" id="password" name="password" class="form-control ">    

					<label>Hak Akses</label>  

	                    <select name="role_id" class="form-control {{$errors->has('role_id') ? 'is-invalid' : '' }}">
					                <!--membuat option select pada admin dan user  -->
					                <option selected disabled>Pilih Hak Akses</option>
					                <option value="1">Admin</option>
					                <option value="2">User</option>
					  	</select>
              @if($errors->has('role_id'))
            <div class="invalid-feedback">
              Wajib di Isi!
            </div>
        @endif                       		
       </div>

				        

       <div class="text-center mt-4" >

                    <button class="btn btn-primary" style="width: 100%;">Update User</button>
                     @include('sweet::alert')

               		 </div>
               		 <h4 style="padding-bottom:20px;"></h4>

   </form>
              
	                    
@stop