<!DOCTYPE html>
<html>
    <title>Halaman Login</title>
    <link rel="shortcut icon" href="https://img.icons8.com/color/40/000000/radio-tower.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"  >

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <style type="text/css">

        body {
            /*mengatur ukuran margin*/
            margin: 0;
             /*mengatur ukuran padding*/
            padding: 0;
            /*mengatur background */
            background: #092B5E;
           
            
        }
        #login .container #login-row #login-column #login-box {
            /*mengatur  ukuran margin*/
            margin: 120px auto;
            /*mengatur max-width*/
            max-width: 500px;
             /*mengatur border dan solid*/
            height: 370px;
            /*mengatur border dan solid*/
            border: 1px solid #9C9C9C;
            /*mengatur background-color */
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

    </style>
</head>
<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('login')}}" method="POST">
                            {{csrf_field()}}
                            <h3 class="text-center text-info">Login</h3>
                            <h5 class="text-center text-info">Sistem Informasi Tower Jember</h5>
                            
                            <div class="form-group">
                                <!--membuat text username -->
                                <label for="username" class="text-info">Username :</label><br>
                                 <!--membuat error ketika form input username kosong -->
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                            </div>

                            <div class="form-group">
                                <!--membuat text password -->
                                <label for="password" class="text-info">Password :</label><br>
                                <!--membuat error ketika form input password kosong -->
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            </div>

                            <div class="form-group text-center" >
                                <!--membuat button submit dengan text login-->
                                <button type="submit" name="login" class="btn btn-primary login">LOGIN</button> 
                                <!--membuat include alert--> 
                                 @include('sweet::alert')
                                                
                            </div>                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>