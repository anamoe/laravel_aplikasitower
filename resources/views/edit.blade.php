<!DOCTYPE html>
<html>
    <title>Halaman Edit</title>
    <link rel="shortcut icon" href="https://img.icons8.com/color/40/000000/radio-tower.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


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
                    	<h4 style="padding: 20px;">Edit Data Tower</h4>
                        <table class="table table-striped">

              							<thead>
              							<tr>
              								<th scope="col">No</th>
              						        <th scope="col">Nama Perusahaan</th>
              						        <th scope="col">Koor Lat</th>
              						        <th scope="col">Koor Leng</th>
              						        <th scope="col">Aksi</th>
              						        
              							</tr>
              							</thead>
							
              							<tbody>
                              <!--membuat variabel i = 0-->
              								<?php $i=1; ?>
              							<!--membuat perulanga foreach dengan variabel data sebagai variabel d-->
              							@foreach($towers as $t)
              							<tr>
                              <!--perulangan dengan penambahan 1-->
              								<td>{{$i++}}</td>
                              <!--memanggil variabel desa-->
              								<td>{{$t->nama_tower}}</td>
              								<td>{{$t->koor_lat}}</td>
              								<td>{{$t->koor_leng}}</td>
        
              								<td>
                                   <!--membuat button Edit-->
                                  <a href="{{route('update',$t->id)}}" class="btn btn-primary">Edit</a>
                                   <!--membuat button Hapus-->
                                  <a href="{{route('delete', $t->id)}}" class="btn btn-danger">Hapus</a>
                              </td>
              								
              							
              							</tr>
              							@endforeach
                             <!--membuat sweet alert-->
                            @include('sweet::alert')
              							</tbody>
							
						             </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

