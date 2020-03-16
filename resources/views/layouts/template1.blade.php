<!-- TEMPLATE ADMIN EDIT UPDATE -->
<!DOCTYPE html>
<html>
    <!-- Ikon Tab -->
    <link rel="shortcut icon" href="https://img.icons8.com/color/40/000000/radio-tower.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <!-- Menyesuaikan ukuran layar device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Javascript Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>



    <!-- Kode CSS -->
    <style type="text/css">

        body {
            /*mengatur ukuran margin*/
            margin: 0;
             /*mengatur ukuran padding*/
            padding: 0;
            /*mengatur background */
            background: #092B5E;
        }

        #template .container #template-row #template-column #template-box {
             /*mengatur  ukuran margin*/
            margin: 180px auto;
            /*mengatur width*/
            width: 100%;
            /*mengatur border dan solid*/
            border: 1px solid #9C9C9C;
            /*mengatur background-color */
            background-color: #EAEAEA;
        }
        #template .container #template-row #template-column #template-box #template-form {
             /*mengatur  ukuran padding*/
            padding: 20px;
        }

        .template{
            /* mengatur ukuran width*/
            width: 100%;
        }

        .navbar{
            /*mengatur widht*/
            width: 100%;
            /*mengatur z-index*/
            z-index: 100;
            /*mengatur postion*/
            position: fixed;
            /*mengatur background*/
            background: #89C4F4;
            /*mengatur color*/
            color: #ffffff;
            
        }
        .navbar-nav{
            /*mengatur background*/
            background: #89C4F4;
            /*mengatur ukuran width*/
            width: 100%;
            /*mengatur padding-right*/
            padding-right: 50px;
            /*mengatur color*/
            color: #fff;
        }

    
        .nav-item{
            /*mengatur padding-right*/
            padding-right: 20px;
        }

        .navbar-brand{
            /*mengatur padding-left*/
            padding-left: 20px;
            /*mengatur color*/
            color: #1366e8;
            /*mengatur dekorasi teks*/
            text-decoration: none;
        }
        .content{
            /*mengatur scroll*/
            overflow: auto;
        }


    </style>

    <!-- Kode CSS -->

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
      <!--Logo-->
      <a class="navbar-brand" href="{{route('tower.index')}}"><img src="http://diskominfo.jemberkab.go.id/assets/images/logo_kominfo_jember.png" alt="" style="width:250px">
      </a>

      <!--Judul-->
      <h6>Sistem Informasi Tower<br>Kabupaten Jember</h6>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav justify-content-end">
       
          <li class="nav-item active">
            <!--membuat link hasil dan route ke halaman index -->
            <a class="nav-link" href="{{route('tower.index')}}">HASIL</a>
          </li>

          <li class="nav-item active">
              <!--membuat link tambah tower dan route ke halaman tambah -->
            <a class="nav-link active" href="{{route('tower.create')}}">TAMBAH TOWER</a>
          </li>

          <li class="nav-item active">
              <!--membuat link tambah akun dan route ke halaman template -->
            <a class="nav-link active" href="{{route('halaman_daftar')}}">TAMBAH AKUN</a>
          </li>

          <li class="nav-item active">
              <!--membuat link tambah akun dan route ke halaman template -->
            <a class="nav-link active" href="{{route('lihat')}}">LIHAT USER</a>
          </li>
        
          <li class="nav-item active">
            <div class="dropdown show">
                <!--Nama-->
              <a class="btn btn-primary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Auth::user()->nama}}
              </a>
              <!--Tombol Logout-->
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{route('logout')}}">Logout</a>  
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div id="template">
        <div class="container">
            <div id="template-row" class="row justify-content-center align-items-center">
                <div id="template-column" class="col-md">
                    <div id="template-box" class="col-md-12 content">
                        @yield('konten')
                    </div>
                </div>
            </div>
        </div>
    </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
