<!DOCTYPE html>
<?php 
    session_start();
    if(!isset($_SESSION['username'])){
      header ("location:../logout.php");
    }
    if($_SESSION['level'] != "User"){
      header ("location:../logout.php");
    }
    include '../koneksi.php';
    $username    = $_SESSION['username'];
    $qpeserta    = mysqli_query ($con, "SELECT * FROM tb_peserta WHERE username='$username'");
    $qkampus     = mysqli_query ($con, "SELECT * FROM tb_kampus WHERE username='$username'");
    $qorangtua   = mysqli_query ($con, "SELECT * FROM tb_orangtua WHERE username='$username'");
    $qpenelitian = mysqli_query ($con, "SELECT * FROM tb_penelitian WHERE username='$username'");
    $qberkas     = mysqli_query ($con, "SELECT * FROM tb_berkas WHERE username='$username'");
    if((mysqli_num_rows($qpeserta)==1) && (mysqli_num_rows($qkampus)==1)){
        $ss=1;
        while($row = mysqli_fetch_assoc($qpeserta)){
            $nik              = $row["nik"];
            $namalengkap      = $row["nama"];
            $tempatlahir      = $row["tempatlahir"];
            $tanggallahir     = $row["tgllahir"];
            $jk               = $row["jk"];
            $agama            = $row["agama"];
            $statuskawin      = $row["statuskawin"];
            $status           = $row["status"];
            $nomorhp          = $row["nohp"];
            $nomorpeserta     = $row["nomorpeserta"];
            $tgldaftar        = $row["tgldaftar"];
        }
        while($row = mysqli_fetch_assoc($qkampus)){
            $asaluniv         = $row["namakampus"];
            $akreditasikampus = $row["akreditasikampus"];
            $fakultas         = $row["fakultas"];
            $programstudi     = $row["namaprodi"];
            $akreditasiprodi  = $row["akreditasiprodi"];
            $ipk              = $row["ipk"];
        }
        while($row = mysqli_fetch_assoc($qorangtua)){
            $namaayah         = $row["namaayah"];
            $pekerjaanayah    = $row["pekerjaanayah"];
            $penghasilanayah  = $row["penghasilanayah"];
            $namaibu          = $row["namaibu"];
            $pekerjaanibu     = $row["pekerjaanibu"];
            $penghasilanibu   = $row["penghasilanibu"];
        }
        while($row = mysqli_fetch_assoc($qpenelitian)){
            $judul            = $row["judul"];
            $abstrak          = $row["abstrak"];
            $proposal         = $row["proposal"];
            $ppt              = $row["ppt"];
            $kategori         = $row["kategori"];
        }while($row = mysqli_fetch_assoc($qberkas)){
            $diri            = $row["diri"];
            $kk              = $row["kk"];
            $ktp             = $row["ktp"];
            $pernyataan      = $row["pernyataan"];
            $rekomendasi     = $row["rekomendasi"];
            $aktifkuliah     = $row["aktifkuliah"];
            $transkirp       = $row["transkirp"];
            $ktm             = $row["ktm"];
            $cv              = $row["cv"];
            $portofolio      = $row["portofolio"];
        }
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
            var dataRiwayatPendidikan,dataRiwayatOrganisasi,dataRiwayatPrestasi;
            //dataRiwayatPendidikan
            $(document).ready(function() {
                TableManageButtons.init();
                dataRiwayatPendidikan=$('#dataRiwayatPendidikan').DataTable( {
                    "ajax": "../datamodel.php?page=datariwayatpendidikan",
                    "columns": [
                      { "data": "jenjang" },
                      { "data": "namainstitusi" },
                      { "data": "jurusan" },
                      { "data": "nilai" },
                      { "data": "tahunmasuk" },
                      { "data": "tahunlulus" },
                      { "data": "nomorijazah" },
                      {// this is Actions Column 
                        mRender: function (data, type, row) {
                          var dataijazah= row.fotoijazah;
                          var linkIjazah;
                          if(dataijazah=="" || dataijazah==null){
                            linkIjazah = '<a href="#" class="btn btn-github waves-effect waves-light"> <i class="fa fa-rocket m-r-5"></i> <span>Belum Upload</span></a>';
                          }else{
                            linkIjazah = '<a href="../berkas/-1" target="_blank" class="btn btn-success waves-effect waves-light"> <i class="fa fa-file m-r-5"></i> <span>Cek File</span></a>';
                          }
                          linkIjazah = linkIjazah.replace("-1", row.fotoijazah);

                          return linkIjazah;
                        }
                      },
                      {// this is Actions Column 
                        mRender: function (data, type, row) {
                          var datacoba= "'"+row.id_pendidikan+"|"+row.jenjang+"|"+row.namainstitusi+"|"+row.jurusan+"|"+row.nilai+"|"+row.tahunmasuk+"|"+row.tahunlulus+"|"+row.nomorijazah+"'";
                          var linkDetail = '<a href="#" class="btn-sm btn-primary" onclick="parseDataPembelian('+datacoba+');" data-toggle="modal" data-target="#modalInvoice"><i class="fa fa-pencil"></i></a> &nbsp;';
                          linkDetail = linkDetail.replace("-1", row.id_pendidikan);

                          var linkDelete = '<a href="#" onclick="deletependidikan(\'-1\')" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>';
                          linkDelete = linkDelete.replace("-1", row.id_pendidikan);

                          return linkDetail+linkDelete;
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
                $('#formAddDataDiri').on('submit', function (e) {
                  e.preventDefault();
                  var nik = $('#nik').val();
                  var namalengkap = $('#namalengkap').val();
                  var tempatlahir = $('#tempatlahir').val();
                  var tanggallahir = $('#tanggallahir').val();
                  var jeniskelamin = $('#jeniskelamin').val();
                  var agama = $('#agama').val();
                  var statuskawin = $('#statuskawin').val();
                  var nomorhp = $('#nomorhp').val();
                  var asaluniv = $('#asaluniv').val();
                  var akreditasikampus = $('#akreditasikampus').val();
                  var fakultas = $('#fakultas').val();
                  var programstudi = $('#programstudi').val();
                  var akreditasiprodi = $('#akreditasiprodi').val();
                  var ipk = $('#ipk').val();
                  if (nik!="" && namalengkap!="" && tempatlahir!="" && tanggallahir!="" && jeniskelamin!="" && agama!="" && statuskawin!="" && nomorhp!="" && asaluniv!="" && akreditasikampus!="" && fakultas!="" && programstudi!="" && akreditasiprodi!="" && ipk!="") {
                    $.ajax({
                        type: 'post',
                        url: '../datamodel.php?page=adddatadiri',
                        data: $('form').serialize(),
                        success: function (pesan) {
                            if(pesan=='Data Diri Berhasil Di Tambahkan !!!'){
                                swal({
                                   title: "Sukses Menambahkan Data Diri",
                                   icon: "success",
                                   text: pesan,
                                }).then(function() {
                                    window.location = '?mod=dataorangtua';
                                });
                            }else if(pesan=='Data Diri Berhasil Di Update !!!'){
                                swal({
                                    title: "Sukses Mengupdate Data Diri",
                                    icon: "success",
                                    text: pesan,
                                }).then(function() {
                                    window.location = '?mod=dataorangtua';
                                });
                            }else if(pesan=='Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!'){
                                swal({
                                    title: "Gagal Menambahkan Data Diri",
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
                        title: "Gagal Menambahkan Data Diri",
                        icon: "error",
                        text: "Silahkan Lengkapi Semua Data Diri Anda",
                    });
                  }
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
                            if(pesan=='Data Penelitian Berhasil Ditambahkan !!!'){
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
        </script>

        <!-- App js -->
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>


    </body>
</html>