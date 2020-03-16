<!-- TEMPLATE USER DAFTAR -->

<!DOCTYPE html>
<html>
    <!-- untuk penggunaan icon di samping title -->
    <link rel="shortcut icon" href="https://img.icons8.com/color/40/000000/radio-tower.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--style untuk bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!--style untuk penggunaan ajax sweet-alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
     <!--script untuk penggunaan jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <!--script untuk library ajax sweet-alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <style type="text/css">

        body {
            /*mengatur ukuran margin*/
            margin: 0;
            /*mengatur ukuran padding*/
            padding: 0;
            /*mengatur background */
            background: #092B5E;
           
            
        }/* membuat id template*/
        #template .container #template-row #template-column #template-box {
            /*mengatur  ukuran margin*/
            margin: 180px auto;
            /*mengatur max-width*/
            width: 500px;
            /*mengatur border dan solid*/
            border: 1px solid #9C9C9C;
            /*mengatur background-color */
            background-color: #EAEAEA;
        }
        /*membuat id template-form*/
        #template .container #template-row #template-column #template-box #template-form {
            /*mengatur  ukuran padding*/
            padding: 20px;
        }/*membuat id register-link*/
        #template .container #template-row #template-column #template-box #template-form #register-link {
            margin-top: -85px;
        }
        /**/
        .template{
            /* mengatur ukuran width*/
            width: 100%;
        }

        .navbar{
            /*mengatur ukuran width*/
            width: 100%;
            /*mengatur z-index*/
            z-index: 100;
            /*mengatur position*/
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
            /*mengatur ukuran padding-right*/
            padding-right: 50px;
            /*mengatur color*/
            color: #fff;
        }

    
        .nav-item{
            /*mengatur ukuran padding-right*/
            padding-right: 20px;
        }

        .navbar-brand{
            /*mengatur ukuran paddding-left*/
            padding-left: 20px;
            /*mengatur color*/ 
            color: #1366e8;
            /*mengatur dekorasi teks*/
            text-decoration: none;
        }

        #template-box{
            padding: 20px;
        }


    </style>
    <!------- Include the above in your HEAD tag --------->
</head>
<body>
<!--membuat nav class -->
    <nav class="navbar navbar-expand-lg navbar-dark">

        <!--membuat navbar brand -->
        <a class="navbar-brand" href="{{route('tower.index')}}">
             <!--membuat tag image dengan width -->
            <img src="http://diskominfo.jemberkab.go.id/assets/images/logo_kominfo_jember.png" alt="" style="width:250px">
        </a>

        <!--menggunakan header h6 -->
        <h6>Sistem Informasi Tower<br>Kabupaten Jember</h6>
              
        <!--membuat button dengan class navbar type button-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>

              <!-- membuat class collspace navbar-collapse-->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-end">
                  <!-- membuat class native-item acituve --> 

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
                    <!--membuat menu dropdown menampilkan user dengan auth-->
                          <a class="btn btn-primary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->nama}}
                          </a>
                        <!--membuat menu logout didalam dropdown didalam user dengan route logout -->
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                      </div>
                    </div>
                  </li>

                </ul>
            </div>
    </nav>
      <!--membuat id login -->
    <div id="template">
        <!--membuat class container -->
        <div class="container">
            <!--membuat id login-row dengan konten di tengah-->
            <div id="template-row" class="row justify-content-center align-items-center">
                 <!--membuat id template-column dengan grid col-md-6-->
                <div id="template-column" class="col-md-6">
                     <!--membuat id template-box dengan grid col-md-12-->
                    <div id="template-box" class="col-md-12">
                        
                        @yield('konten')

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--script utnuk menggunakan ajax pada sweet-alert -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

   <!--script untuk bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>