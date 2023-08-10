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
        <title>Beasiswa Pendidikan Baznas - Registrasi</title>
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
                                        <h5 class="text-uppercase font-bold m-b-5 m-t-50">Register</h5>
                                        <p class="m-b-0">Please Input Your Data</p>
                                    </div>
                                    <div class="account-content">
                                        <form action="" id="formregister" class="form-horizontal">

                                            <div class="form-group m-b-20">
                                                <div class="col-xs-12">
                                                    <label for="username">Username</label>
                                                    <input class="form-control" type="text" id="username" required="" placeholder="Username Anda" name="username">
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20">
                                                <div class="col-xs-12">
                                                    <label for="namalengkap">Nama Lengkap</label>
                                                    <input class="form-control" type="text" id="namalengkap" required="" placeholder="Username Anda" name="namalengkap">
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
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Register !</button>
                                                </div>
                                            </div>

                                        </form>

                                        <div class="row m-t-50">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted">Sudah Punya Akun?<a href="index.php" class="text-dark m-l-5"><b>Login Disini!</b></a></p>
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
            $('#formregister').on('submit', function (e) {
                    e.preventDefault();
                    var form = $(this).parents('form');
                    swal({
                      title: "Apakah Anda Yakin Data Anda Sudah Benar?",
                      text: "Anda Ingin Mendaftar di Penerimaan Beasiswa Baznas Enrekang !?",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willAdd) => {
                      if (willAdd) {
                        $.ajax({
                          type: 'post',
                          enctype: 'multipart/form-data',
                          url: 'datamodel.php?page=registrasi',
                          data: new FormData(this),
                          processData: false,
                          contentType: false,
                          cache: false,
                          timeout: 600000,
                            success: function (pesan) {
                                if(pesan=='Proses Registrasi Telah Berhasil Silahkan Login !!!'){
                                    swal({
                                       title: "Sukses Mendfatar Beasiswa",
                                       icon: "success",
                                       text: pesan,
                                    }).then(function() {
                                        window.location = 'index.php';
                                    });
                                }else if(pesan=='Gagal Mendaftar Silahkan Hubungi Admin/Developer !!!'){
                                    swal({
                                        title: "Gagal Mendaftar Beasiswa",
                                        icon: "error",
                                        text: pesan,
                                    });
                                }else{
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
                });
          </script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>