<?php 
    session_start();
    if (!empty($_SESSION['username'])){
        if($_SESSION['level']=='Admin'){
            header('location: admin/', true, 301);
        }else if($_SESSION['level']=='User'){
            header('location: user/', true, 301);
        }else{
            header('location: page-404.html', true, 301);
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Beasiswa Pendidikan Baznas - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Sweet Alert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="bg-accpunt-pages">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            <a href="?" class="text-success">
                                                <span><img src="assets/images/logo_dark.png" alt="" height="150"></span>
                                            </a>
                                        </h2>
                                        <h5 class="text-uppercase font-bold m-b-5 m-t-50">Sign In</h5>
                                        <p class="m-b-0">Login to your account</p>
                                    </div>
                                    <div class="account-content">
                                        <form action="" id="formlogin" class="form-horizontal">

                                            <div class="form-group m-b-20">
                                                <div class="col-xs-12">
                                                    <label for="emailaddress">Username</label>
                                                    <input class="form-control" type="text" id="emailaddress" required="" placeholder="Username Anda" name="username">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20">
                                                <div class="col-xs-12">
                                                    <label for="password">Password</label>
                                                    <input class="form-control" type="password" required="" id="password" placeholder="Password Anda" name="password">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20">
                                                <div class="col-xs-12">
                                                </div>
                                            </div>

                                            <div class="form-group text-center m-t-10">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign In</button>
                                                </div>
                                            </div>

                                        </form>

                                        <div class="row m-t-50">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted">Belum Punya Akun?<a href="registrasi.php" class="text-dark m-l-5"><b>Daftar Disini!</b></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->
                        </div>
                        <!-- end wrapper -->
                        <div class="col-xs-12 text-center" style="color: black;">
                            2022 © BAZNAS - Kabupaten Enrenkang
                        </div>
                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script>
            $('#formlogin').on('submit', function (e) {
                e.preventDefault();
                var username = $('#txt_username').val();
                var password = $('#txt_password').val();
                if (username!="" && password!="") {
                    $.ajax({
                    type: 'post',
                    url: 'datamodel.php?page=proseslogin',
                    data: $('form').serialize(),
                    success: function (pesan) {
                      if(pesan=='Berhasil Login Sebagai Administrator Baznas'){
                        //Arahkan ke halaman admin jika script pemroses mencetak kata ok
                        window.location = 'admin/';
                      }else if(pesan=='Berhasil Login Sebagai User Baznas'){
                        //Arahkan ke halaman admin jika script pemroses mencetak kata ok
                        window.location = 'user/';
                      }else{
                        //Cetak peringatan untuk username & password salah
                        swal({
                          title: "Gagal !",
                          icon: "error",
                          text: pesan,
                        });
                      }
                    }
                });
                }
            });
          </script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>