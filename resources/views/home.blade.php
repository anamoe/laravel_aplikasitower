<!DOCTYPE html>
<html>
    <title>Selamat Datang di Aplikasi Sistem Informasi Tower</title>
    <link rel="shortcut icon" href="https://img.icons8.com/color/40/000000/radio-tower.png">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        
        body{
           
            background: url('image/tower.jpg');
            background-size: cover;
     
            background-position: center;
            display: flex;
            justify-content: center;
            background-repeat: no-repeat;

         
        }

       

        .bg{
          
            padding: 30px;
            margin: 130px;
            width: 100%;
            color:#ffffff;
            background: rgba(0,0,0,.4);
            border-radius: 5px;

        }

        .display-4{
               font-size: 40px; 
            }
        
         @media (max-width: 768px) { 
            .display-4{
               font-size: 30px; 
            }
            
            .bg{
          
                margin: 20px;
            }

            body{
                background-size: auto;
            }

         }


    </style>
</head>
<body>

    
        <div class="container-fluid bg text-center">
      <h1 class="display-4">Aplikasi Sistem Informasi Tower <br> Kebupaten Jember</h1>
      <p class="lead">Sebuah Aplikasi yang memuat informasi tentang Tower yang ada di Kabupaten Jember</p>
      <hr class="my-4">
      <p><h4 class="display-4">Selamat Datang</h4>
        Untuk mengakses aplikasi ini silahkan login terlebih dahulu.
      </p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="{{route('halaman_login')}}" role="button">Login</a>
      </p>
    </div>
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>