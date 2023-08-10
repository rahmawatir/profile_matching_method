<!DOCTYPE html>
<?php 
    date_default_timezone_set("Asia/Makassar");
    session_start();
    if(!isset($_SESSION['username'])){
      header ("location:../logout.php");
    }
    if($_SESSION['level'] != "Admin"){
      header ("location:../logout.php");
    }
    include '../koneksi.php';
    $username    = $_SESSION['username'];
    $qlowongan   = mysqli_query ($con, "SELECT * FROM tb_lowongan");
    $qpeserta    = mysqli_query ($con, "SELECT * FROM tb_peserta");
    $jumlahpeserta = mysqli_num_rows($qpeserta);
    $tglskarang = date('Y-m-d');
    while($row = mysqli_fetch_assoc($qlowongan)){
        $tema               = $row["tema"];
        $tanggalmulaidaftar = $row["tanggalmulaidaftar"];
        $tanggalakhirdaftar = $row["tanggalakhirdaftar"];
        $tanggalpemeriksaan = $row["tanggalpemeriksaan"];
        $tanggalpengumuman  = $row["tanggalpengumuman"];
        $statuslowongan     = $row["status"];
        $jumlah             = $row["jumlah"];
    }
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>User - Beasiswa Pendidikan Baznas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="../assets/images/logo.png">

        <!-- Sweet Alert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- C3 charts css -->
        <link href="../plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

        <!-- DataTables -->
        <link href="../plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="../assets/js/modernizr.min.js"></script>

    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <?php include 'header.php'; ?>

            <?php include 'menu.php'; ?>
        </header>
        <!-- End Navigation Bar-->

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <!-- <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li>
                                        <a href="#">Adminox</a>
                                    </li>
                                    <li>
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="active">
                                        Dashboard 1
                                    </li>
                                </ol>
                            </div> -->
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-md-14">
                        <div class="card-box">

                            <?php include 'navigation.php'; ?>

                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <?php include 'footer.php'; ?>
                <!-- End Footer -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
        
        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>

        <script src="../plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>
        <script src="../plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap.js"></script>

        <!-- <script type="text/javascript" src="../plugins/autocomplete/jquery.mockjax.js"></script> -->
        <!-- <script type="text/javascript" src="../plugins/autocomplete/jquery.autocomplete.min.js"></script> -->
        <!-- <script type="text/javascript" src="../plugins/autocomplete/countries.js"></script> -->
        <!-- <script type="text/javascript" src="../assets/pages/jquery.autocomplete.init.js"></script> -->

        <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="../plugins/datatables/jszip.min.js"></script>
        <script src="../plugins/datatables/pdfmake.min.js"></script>
        <script src="../plugins/datatables/vfs_fonts.js"></script>
        <script src="../plugins/datatables/buttons.html5.min.js"></script>
        <script src="../plugins/datatables/buttons.print.min.js"></script>
        <script src="../plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="../plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="../plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="../plugins/datatables/dataTables.colVis.js"></script>
        <script src="../plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="../assets/pages/jquery.datatables.init.js"></script>

        <!--Form Wizard-->
        <script src="../plugins/jquery.stepy/jquery.stepy.min.js" type="text/javascript"></script>

        <!--wizard initialization-->
        <script>
            var dataPeserta,dataUser,dataPesertaLolos,dataRiwayatPendidikan,dataRiwayatOrganisasi,dataRiwayatPrestasi;
            //dataPeserta
            $(document).ready(function() {
                TableManageButtons.init();
                dataPeserta=$('#dataPeserta').DataTable( {
                    "ajax": "../datamodel.php?page=datapeserta",
                    "columns": [
                      {// this is Actions Column 
                        mRender: function (data, type, row) {
                          var foto= row.diri;
                          var linkfoto = '<img src="../berkas/'+foto+'" alt="'+foto+'" style="min-width:50px; max-width: 100px;">';
                          return linkfoto;
                        }
                      },
                      { "data": "nomorpeserta" },
                      { "data": "nama" },
                      { "data": "jk" },
                      { "data": "tempatlahir" },
                      { "data": "tgllahir" },
                      { "data": "namakampus" },
                      { "data": "namaprodi" },
                      {// this is Actions Column 
                        mRender: function (data, type, row) {
                          var datacoba= "'"+row.id_pendidikan+"|"+row.jenjang+"|"+row.namainstitusi+"|"+row.jurusan+"|"+row.nilai+"|"+row.tahunmasuk+"|"+row.tahunlulus+"|"+row.nomorijazah+"'";
                          var linkDetail = '<a href="#" class="btn-sm btn-primary" onclick="parseDataPembelian('+datacoba+');" data-toggle="modal" data-target="#modalInvoice"><i class="fa fa-pencil"></i> Detail</a> &nbsp;<br><br>';
                          linkDetail = linkDetail.replace("-1", row.id_pendidikan);

                          return linkDetail;
                        }
                      }
                    ]
                });
                //dataPesertaLolos
                dataPesertaLolos=$('#dataPesertaLolos').DataTable( {
                    "ajax": "../datamodel.php?page=datapesertalolos",
                    "columns": [
                      {// this is Actions Column 
                        mRender: function (data, type, row) {
                          var foto= row.diri;
                          var linkfoto = '<img src="../berkas/'+foto+'" alt="'+foto+'" style="min-width:50px; max-width: 100px;">';
                          return linkfoto;
                        }
                      },
                      { "data": "nomorpeserta" },
                      { "data": "nama" },
                      { "data": "jk" },
                      { "data": "tempatlahir" },
                      { "data": "tgllahir" },
                      { "data": "namakampus" },
                      { "data": "namaprodi" },
                      {// this is Actions Column 
                        mRender: function (data, type, row) {
                          var datacoba= "'"+row.id_pendidikan+"|"+row.jenjang+"|"+row.namainstitusi+"|"+row.jurusan+"|"+row.nilai+"|"+row.tahunmasuk+"|"+row.tahunlulus+"|"+row.nomorijazah+"'";
                          var linkDetail = '<a href="#" class="btn-sm btn-primary" onclick="parseDataPembelian('+datacoba+');" data-toggle="modal" data-target="#modalInvoice"><i class="fa fa-pencil"></i> Detail</a> &nbsp;';
                          linkDetail = linkDetail.replace("-1", row.id_pendidikan);

                          return linkDetail;
                        }
                      }
                    ]
                });
                //dataUser
                dataPesertaLolos=$('#dataUser').DataTable( {
                    "ajax": "../datamodel.php?page=datauser",
                    "columns": [
                      { "data": "username" },
                      { "data": "nama" },
                      { "data": "password" },
                      {// this is Actions Column 
                        mRender: function (data, type, row) {
                          var datacoba= "'"+row.id_pendidikan+"|"+row.jenjang+"|"+row.namainstitusi+"|"+row.jurusan+"|"+row.nilai+"|"+row.tahunmasuk+"|"+row.tahunlulus+"|"+row.nomorijazah+"'";
                          var linkReset = '<a href="#" class="btn-sm btn-warning" onclick="parseDataPembelian('+datacoba+');" data-toggle="modal" data-target="#modalInvoice"><i class="fa fa-refresh"></i> Detail</a> <br><br>';
                          linkReset = linkReset.replace("-1", row.id_pendidikan);

                          var linkDelete = '<a href="#" class="btn-sm btn-danger" onclick="parseDataPembelian('+datacoba+');" data-toggle="modal" data-target="#modalInvoice"><i class="fa fa-trash"></i> Detail</a> &nbsp;';
                          linkDelete = linkDelete.replace("-1", row.id_pendidikan);

                          return linkReset + linkDelete;
                        }
                      }
                    ]
                });
                //dataUser
                dataPesertaLolos=$('#dataKategori').DataTable( {
                    "ajax": "../datamodel.php?page=datakategori",
                    "columns": [
                      { "data": "idkategori" },
                      { "data": "namakategori" },
                      {// this is Actions Column 
                        mRender: function (data, type, row) {
                          var datacoba= "'"+row.id_pendidikan+"|"+row.jenjang+"|"+row.namainstitusi+"|"+row.jurusan+"|"+row.nilai+"|"+row.tahunmasuk+"|"+row.tahunlulus+"|"+row.nomorijazah+"'";
                          var linkReset = '<a href="#" class="btn-sm btn-primary" onclick="parseDataPembelian('+datacoba+');" data-toggle="modal" data-target="#modalInvoice"><i class="fa fa-pencil"></i></a> &nbsp;';
                          linkReset = linkReset.replace("-1", row.id_pendidikan);

                          var linkDelete = '<a href="#" class="btn-sm btn-danger" onclick="parseDataPembelian('+datacoba+');" data-toggle="modal" data-target="#modalInvoice"><i class="fa fa-trash"></i></a> &nbsp;';
                          linkDelete = linkDelete.replace("-1", row.id_pendidikan);

                          return linkReset + linkDelete;
                        }
                      }
                    ]
                });
                //dataUser
                dataPesertaLolos=$('#dataLowongan').DataTable( {
                    "ajax": "../datamodel.php?page=datalowongan",
                    "columns": [
                      { "data": "tema" },
                      { "data": "tanggalmulaidaftar" },
                      { "data": "tanggalakhirdaftar" },
                      { "data": "tanggalpemeriksaan" },
                      { "data": "tanggalpengumuman" },
                      { "data": "jumlah" },
                      { "data": "status" },
                      {// this is Actions Column 
                        mRender: function (data, type, row) {
                          var datacoba= "'"+row.id_pendidikan+"|"+row.jenjang+"|"+row.namainstitusi+"|"+row.jurusan+"|"+row.nilai+"|"+row.tahunmasuk+"|"+row.tahunlulus+"|"+row.nomorijazah+"'";
                          var linkReset = '<a href="#" class="btn-sm btn-primary" onclick="parseDataPembelian('+datacoba+');" data-toggle="modal" data-target="#modalInvoice"><i class="fa fa-pencil"></i></a> &nbsp;';
                          linkReset = linkReset.replace("-1", row.id_pendidikan);

                          var linkDelete = '<a href="#" class="btn-sm btn-danger" onclick="parseDataPembelian('+datacoba+');" data-toggle="modal" data-target="#modalInvoice"><i class="fa fa-trash"></i></a> &nbsp;';
                          linkDelete = linkDelete.replace("-1", row.id_pendidikan);

                          return linkReset + linkDelete;
                        }
                      }
                    ]
                });
                //dataRiwayatOrganisasi
                dataRiwayatOrganisasi=$('#dataRiwayatOrganisasi').DataTable( {
                    "ajax": "../datamodel.php?page=datariwayatorganisasi",
                    "columns": [
                      { "data": "nama" },
                      { "data": "bidang" },
                      { "data": "jabatan" },
                      { "data": "tahunmasuk" },
                      { "data": "tahunkeluar" },
                      {// this is Actions Column 
                        mRender: function (data, type, row) {
                          var datacoba= "'"+row.id_organisasi+"|"+row.nama+"|"+row.bidang+"|"+row.jabatan+"|"+row.tahunmasuk+"|"+row.tahunkeluar+"'";
                          var linkDetail = '<a href="#" class="btn-sm btn-primary" onclick="parseDataPembelian('+datacoba+');" data-toggle="modal" data-target="#modalInvoice"><i class="fa fa-pencil"></i></a> &nbsp;';
                          linkDetail = linkDetail.replace("-1", row.id_organisasi);

                          var linkDelete = '<a href="#" onclick="deleteorganisasi(\'-1\')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>';
                          linkDelete = linkDelete.replace("-1", row.id_organisasi);

                          return linkDetail+linkDelete;
                        }
                      }
                    ]
                });
                //dataRiwayatPrestasi
                dataRiwayatPrestasi=$('#dataRiwayatPrestasi').DataTable( {
                    "ajax": "../datamodel.php?page=datariwayatprestasi",
                    "columns": [
                      { "data": "namakegiatan" },
                      { "data": "bidang" },
                      { "data": "peringkat" },
                      { "data": "tingkat" },
                      { "data": "penyelenggara" },
                      { "data": "tahun" },
                      {// this is Actions Column 
                        mRender: function (data, type, row) {
                          var datasertifikat= row.sertifikat;
                          var linkSertifikat;
                          if(datasertifikat=="" || datasertifikat==null){
                            linkSertifikat = '<a href="#" class="btn btn-github waves-effect waves-light"> <i class="fa fa-rocket m-r-5"></i> <span>Belum Upload</span></a>';
                          }else{
                            linkSertifikat = '<a href="../berkas/-1" target="_blank" class="btn btn-success waves-effect waves-light"> <i class="fa fa-file m-r-5"></i> <span>Cek File</span></a>';
                          }
                          linkSertifikat = linkSertifikat.replace("-1", row.sertifikat);

                          return linkSertifikat;
                        }
                      },
                      {// this is Actions Column 
                        mRender: function (data, type, row) {
                          var datacoba= "'"+row.id_prestasi+"|"+row.namakegiatan+"|"+row.bidang+"|"+row.peringkat+"|"+row.tingkat+"|"+row.penyelenggara+"|"+row.tahun+"|"+row.sertifikat+"'";
                          var linkDetail = '<a href="#" class="btn-sm btn-primary" onclick="parseDataPembelian('+datacoba+');" data-toggle="modal" data-target="#modalInvoice"><i class="fa fa-pencil"></i></a> &nbsp;';
                          linkDetail = linkDetail.replace("-1", row.id_prestasi);

                          var linkDelete = '<a href="#" onclick="deleteprestasi(\'-1\')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>';
                          linkDelete = linkDelete.replace("-1", row.id_prestasi);

                          return linkDetail+linkDelete;
                        }
                      }
                    ]
                });
                $('#formAddBeasiswa').on('submit', function (e) {
                    e.preventDefault();
                    var form = $(this).parents('form');
                    swal({
                      title: "Apakah Anda Yakin?",
                      text: "Anda Ingin Membuka Proses Penerimaan Beasiswa !?",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willAdd) => {
                      if (willAdd) {
                        $.ajax({
                          type: 'post',
                          enctype: 'multipart/form-data',
                          url: '../datamodel.php?page=addbeasiswa',
                          data: new FormData(this),
                          processData: false,
                          contentType: false,
                          cache: false,
                          timeout: 600000,
                            success: function (pesan) {
                                if(pesan=='Data Beasiswa Berhasil Ditambahkan !!!'){
                                    swal({
                                       title: "Sukses Membuka Proses Beasiswa",
                                       icon: "success",
                                       text: pesan,
                                    }).then(function() {
                                        window.location = '?mod=timeline';
                                    });
                                }else if(pesan=='Data Beasiswa Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!'){
                                    swal({
                                        title: "Gagal Membuka Proses Beasiswa",
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
                $('#formAddDataOrangTua').on('submit', function (e) {
                  e.preventDefault();
                  var namaayah = $('#namaayah').val();
                  var pekerjaanayah = $('#pekerjaanayah').val();
                  var penghasilanayah = $('#penghasilanayah').val();
                  var namaibu = $('#namaibu').val();
                  var pekerjaanibu = $('#pekerjaanibu').val();
                  var penghasilanibu = $('#penghasilanibu').val();
                  if (namaayah!="" && pekerjaanayah!="" && penghasilanayah!="" && namaibu!="" && pekerjaanibu!="" && penghasilanibu!="") {
                    $.ajax({
                        type: 'post',
                        url: '../datamodel.php?page=adddataorangtua',
                        data: $('form').serialize(),
                        success: function (pesan) {
                            if(pesan=='Data Orang Tua Berhasil Di Tambahkan !!!'){
                                swal({
                                   title: "Sukses Menambahkan Data Orang Tua",
                                   icon: "success",
                                   text: pesan,
                                }).then(function() {
                                    window.location = '?mod=datariwayat';
                                });
                            }else if(pesan=='Data Orang Tua Berhasil Di Update !!!'){
                                swal({
                                    title: "Sukses Mengupdate Data Orang Tua",
                                    icon: "success",
                                    text: pesan,
                                }).then(function() {
                                    window.location = '?mod=datariwayat';
                                });
                            }else if(pesan=='Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!'){
                                swal({
                                    title: "Gagal Menambahkan Data Orang Tua",
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
                  }else{
                    swal({
                        title: "Gagal Menambahkan Data Orang Tua",
                        icon: "error",
                        text: "Silahkan Lengkapi Semua Data Orang Tua Anda",
                    });
                  }
                });
                $('#formAddDataOrganisasi').on('submit', function (e) {
                    e.preventDefault();
                    $.ajax({
                      type: 'post',
                      enctype: 'multipart/form-data',
                      url: '../datamodel.php?page=addorganisasi',
                      data: new FormData(this),
                      processData: false,
                      contentType: false,
                      cache: false,
                      timeout: 600000,
                        success: function (pesan) {
                            if(pesan=='Data Organisasi Berhasil Ditambahkan !!!'){
                                swal({
                                   title: "Sukses Menambahkan Data Organisasi",
                                   icon: "success",
                                   text: pesan,
                                }).then((value) => {
                                    $('#organisasi-modal').modal('hide');
                                });
                                document.getElementById("formAddDataOrganisasi").reset();
                                dataRiwayatOrganisasi.ajax.reload();
                            }else if(pesan=='Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!'){
                                swal({
                                    title: "Gagal Menambahkan Organisasi",
                                    icon: "error",
                                    text: pesan,
                                });
                                dataRiwayatOrganisasi.ajax.reload();
                            }else{
                                swal({
                                    title: "Gagal !",
                                    icon: "error",
                                    text: pesan,
                                });
                                dataRiwayatOrganisasi.ajax.reload();
                            }
                        }
                    });
                });
                $('#formAddDataPrestasi').on('submit', function (e) {
                    e.preventDefault();
                    $.ajax({
                      type: 'post',
                      enctype: 'multipart/form-data',
                      url: '../datamodel.php?page=addprestasi',
                      data: new FormData(this),
                      processData: false,
                      contentType: false,
                      cache: false,
                      timeout: 600000,
                        success: function (pesan) {
                            if(pesan=='Data Prestasi Berhasil Ditambahkan !!!'){
                                swal({
                                   title: "Sukses Menambahkan Data Prestasi",
                                   icon: "success",
                                   text: pesan,
                                }).then((value) => {
                                    $('#prestasi-modal').modal('hide');
                                });
                                document.getElementById("formAddDataPrestasi").reset();
                                dataRiwayatPrestasi.ajax.reload();
                            }else if(pesan=='Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!'){
                                swal({
                                    title: "Gagal Menambahkan Prestasi",
                                    icon: "error",
                                    text: pesan,
                                });
                                dataRiwayatPrestasi.ajax.reload();
                            }else{
                                swal({
                                    title: "Gagal !",
                                    icon: "error",
                                    text: pesan,
                                });
                                dataRiwayatPrestasi.ajax.reload();
                            }
                        }
                    });
                });
                $('#formAddDataPendidikan').on('submit', function (e) {
                    e.preventDefault();
                    $.ajax({
                      type: 'post',
                      enctype: 'multipart/form-data',
                      url: '../datamodel.php?page=addpendidikan',
                      data: new FormData(this),
                      processData: false,
                      contentType: false,
                      cache: false,
                      timeout: 600000,
                        success: function (pesan) {
                            if(pesan=='Data Pendidikan Berhasil Ditambahkan !!!'){
                                swal({
                                   title: "Sukses Menambahkan Data Pendidikan",
                                   icon: "success",
                                   text: pesan,
                                }).then((value) => {
                                    $('#pendidikan-modal').modal('hide');
                                });
                                document.getElementById("formAddDataPendidikan").reset();
                                dataRiwayatPendidikan.ajax.reload();
                            }else if(pesan=='Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!'){
                                swal({
                                    title: "Gagal Menambahkan Pendidikan",
                                    icon: "error",
                                    text: pesan,
                                });
                                dataRiwayatPendidikan.ajax.reload();
                            }else{
                                swal({
                                    title: "Gagal !",
                                    icon: "error",
                                    text: pesan,
                                });
                                dataRiwayatPendidikan.ajax.reload();
                            }
                        }
                    });
                });
                $('#formAddDataPenelitian').on('submit', function (e) {
                    e.preventDefault();
                    $.ajax({
                      type: 'post',
                      enctype: 'multipart/form-data',
                      url: '../datamodel.php?page=addpenelitian',
                      data: new FormData(this),
                      processData: false,
                      contentType: false,
                      cache: false,
                      timeout: 600000,
                        success: function (pesan) {
                            if(pesan=='Data Penelitian Berhasil Di Tambahkan !!!'){
                                swal({
                                   title: "Sukses Menambahkan Data Penelitian",
                                   icon: "success",
                                   text: pesan,
                                }).then(function() {
                                    window.location = '?mod=berkaspersyaratan';
                                });
                            }else if(pesan=='Data Penelitian Berhasil Di Update !!!'){
                                swal({
                                    title: "Sukses Mengupdate Data Penelitian",
                                    icon: "success",
                                    text: pesan,
                                }).then(function() {
                                    window.location = '?mod=berkaspersyaratan';
                                });
                            }else if(pesan=='Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!'){
                                swal({
                                    title: "Gagal Menambahkan Data Penelitian",
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
                });
                $('#formAddDataBerkas').on('submit', function (e) {
                    e.preventDefault();
                    $.ajax({
                      type: 'post',
                      enctype: 'multipart/form-data',
                      url: '../datamodel.php?page=addberkas',
                      data: new FormData(this),
                      processData: false,
                      contentType: false,
                      cache: false,
                      timeout: 600000,
                        success: function (pesan) {
                            if(pesan=='Data Berkas Berhasil Di Tambahkan !!!'){
                                swal({
                                   title: "Sukses Menambahkan Data Berkas",
                                   icon: "success",
                                   text: pesan,
                                }).then(function() {
                                    window.location = '?mod=berkaspersyaratan';
                                });
                            }else if(pesan=='Data Berkas Berhasil Di Update !!!'){
                                swal({
                                    title: "Sukses Mengupdate Data Berkas",
                                    icon: "success",
                                    text: pesan,
                                }).then(function() {
                                    window.location = '?mod=berkaspersyaratan';
                                });
                            }else if(pesan=='Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!'){
                                swal({
                                    title: "Gagal Menambahkan Data Berkas",
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
                });
            });
            function deleteorganisasi(id){
              swal({
                title: "Apakah Anda Yakin?",
                text: "Anda Ingin Menghapus Data Riwayat Organisasi Ini !?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                  var idx = id;
                  // console.log(idx);
                  $.ajax({
                    url: '../datamodel.php?page=deleteorganisasi',
                    type: 'POST',
                    data: {
                      'id': idx,
                    },
                    success: function (pesan) {
                      if(pesan=='Data Berhasil Dihapus !!!'){
                          swal({
                              title: "Berhasil !",
                              icon: "success",
                              text: pesan
                          }).then(function() {
                              dataRiwayatOrganisasi.ajax.reload();
                          });
                      }else if(pesan=='Terjadi Kesalahan !!! Silahkan Hubungi Administrator'){
                          swal({
                              title: "WARNING !",
                              icon: "warning",
                              text: pesan
                          });
                      }
                      else{
                          swal({
                              title: "Gagal !",
                              icon: "error",
                              text: "Gagal Menghapus Data",
                          });
                      }
                    }
                  });
                }
              });
            };
            function deleteprestasi(id){
              swal({
                title: "Apakah Anda Yakin?",
                text: "Anda Ingin Menghapus Data Riwayat Prestasi Ini !?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                  var idx = id;
                  // console.log(idx);
                  $.ajax({
                    url: '../datamodel.php?page=deleteprestasi',
                    type: 'POST',
                    data: {
                      'id': idx,
                    },
                    success: function (pesan) {
                      if(pesan=='Data Berhasil Dihapus !!!'){
                          swal({
                              title: "Berhasil !",
                              icon: "success",
                              text: pesan
                          }).then(function() {
                              dataRiwayatPrestasi.ajax.reload();
                          });
                      }else if(pesan=='Terjadi Kesalahan !!! Silahkan Hubungi Administrator'){
                          swal({
                              title: "WARNING !",
                              icon: "warning",
                              text: pesan
                          });
                      }
                      else{
                          swal({
                              title: "Gagal !",
                              icon: "error",
                              text: "Gagal Menghapus Data",
                          });
                      }
                    }
                  });
                }
              });
            };
            function deletependidikan(id){
              swal({
                title: "Apakah Anda Yakin?",
                text: "Anda Ingin Menghapus Data Riwayat Pendidikan Ini !?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                  var idx = id;
                  // console.log(idx);
                  $.ajax({
                    url: '../datamodel.php?page=deletependidikan',
                    type: 'POST',
                    data: {
                      'id': idx,
                    },
                    success: function (pesan) {
                      if(pesan=='Data Berhasil Dihapus !!!'){
                          swal({
                              title: "Berhasil !",
                              icon: "success",
                              text: pesan
                          }).then(function() {
                              dataRiwayatPendidikan.ajax.reload();
                          });
                      }else if(pesan=='Terjadi Kesalahan !!! Silahkan Hubungi Administrator'){
                          swal({
                              title: "WARNING !",
                              icon: "warning",
                              text: pesan
                          });
                      }
                      else{
                          swal({
                              title: "Gagal !",
                              icon: "error",
                              text: "Gagal Menghapus Data",
                          });
                      }
                    }
                  });
                }
              });
            };
            function akhiripendaftaran(){
              swal({
                title: "Apakah Anda Yakin?",
                text: "Anda Ingin Mengakhiri Pengisian Biodata & Pendaftaran Ini !?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willEnd) => {
                if (willEnd) {
                  // console.log(idx);
                  $.ajax({
                    url: '../datamodel.php?page=akhiripendaftaran',
                    type: 'POST',
                    data: {},
                    success: function (pesan) {
                      if(pesan=='Anda Berhasil Mengakhiri Pengisian Biodata & Pendaftaran Ini !!!'){
                          swal({
                              title: "Berhasil !",
                              icon: "success",
                              text: pesan
                          }).then(function() {
                              window.location = '?mod=resume';
                          });
                      }else if(pesan=='Terjadi Kesalahan !!! Silahkan Hubungi Administrator'){
                          swal({
                              title: "WARNING !",
                              icon: "warning",
                              text: pesan
                          });
                      }
                      else{
                          swal({
                              title: "Gagal !",
                              icon: "error",
                              text: "Gagal Mengkahiri Pengisian Biodata & Pendaftaran",
                          });
                      }
                    }
                  });
                }
              });
            };
            function display_ct7() {
            var x = new Date()
            document.getElementById('t1').innerHTML = x;

            var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
            hours = x.getHours( ) % 12;
            hours = hours ? hours : 12;
            hours=hours.toString().length==1? 0+hours.toString() : hours;

            var minutes=x.getMinutes().toString()
            minutes=minutes.length==1 ? 0+minutes : minutes;

            var seconds=x.getSeconds().toString()
            seconds=seconds.length==1 ? 0+seconds : seconds;

            var month=(x.getMonth() +1).toString();
            month=month.length==1 ? 0+month : month;

            var dt=x.getDate().toString();
            dt=dt.length==1 ? 0+dt : dt;

            var x1=month + "/" + dt + "/" + x.getFullYear(); 
            x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
            display_c7();
             }
             function display_c7(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct7()',refresh)
            }
            display_c7()
        </script>

        <!-- App js -->
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>


    </body>
</html>