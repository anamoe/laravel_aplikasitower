@extends('layouts.template2')
<title>Halaman Daftar</title>
@section('konten')

     <!--membuat form daftar -->
    <form id="daftar-form" class="form" action="{{route('daftar')}}" method="POST">
        {{csrf_field()}}
        <!--membuat header text daftar akun-->
        <h3 class="text-center text-info">Daftar Akun</h3>
        <!--membuat header text Sistem Informasi Tower Jember-->
        <h5 class="text-center text-info">Sistem Informasi Tower Jember</h5>
        <!--mwmbuat class form-->
        <div class="form-group">
            <!--membuat label text nama-->
            <label for="name" class="text-info">Nama :</label><br>
            <!--membuat error ketika form nama kosong -->
            <input type="text" name="nama" id="nama" class="form-control {{$errors->has('nama') ? 'is-invalid' : '' }}"  placeholder="Nama">
            @if($errors->has('nama'))
                <!--membuat class dengan menampilkan text harus di isi -->
                <div class="invalid-feedback">
                   Harus di Isi
                </div>
            @endif
        </div>
         <div class="form-group">
            <!--membuat text username -->
            <label for="username" class="text-info">Username :</label><br>
            <!--membuat error ketika form input username kosong -->
            <input type="text" name="username" id="username" class="form-control {{$errors->has('username') ? 'is-invalid' : '' }}"  placeholder="Username">
            @if($errors->has('username'))
                <!--membuat class dengan menampilkan text tidak valid -->
                <div class="invalid-feedback">
                   Tidak Valid
                </div>
            @endif
        </div>
        <div class="form-group">
            <!--membuat text password -->
            <label for="password" class="text-info">Password :</label><br>
            <!--membuat error ketika form input password kosong -->
            <input type="password" name="password" id="password" class="form-control {{$errors->has('password') ? 'is-invalid' : '' }}"  placeholder="Password">
            @if($errors->has('password'))
                 <!--membuat class dengan menampilkan text harus diisi -->
                <div class="invalid-feedback">
                   Harus di Isi
                </div>
            @endif
        </div>
        <div class="form-group">
            <!--membuat text hak akses -->
            <label for="password" class="text-info">Hak Akses :</label><br>
            <!--membuat error ketika form input hak akses kosong -->
            <select name="role_id" class="form-control {{$errors->has('role_id') ? 'is-invalid' : '' }}" required>
                <!--membuat option select pada admin dan user  -->
                <option selected disabled>Pilih Hak Akses</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
                
            </select>
            @if($errors->has('role_id'))
                <!--membuat class dengan menampilkan text harus diisi -->
                <div class="invalid-feedback">
                    Harus di Isi
                </div>
            @endif
           
        </div>
        <div class="form-group text-center" >
                <!--membuat button submit dengan text daftar-->
                <button type="submit" name="daftar" class="btn btn-primary login">DAFTAR</button>
                <!--membuat include alert--> 
                @include('sweet::alert') 
               
        </div>                           
    </form>
@stop