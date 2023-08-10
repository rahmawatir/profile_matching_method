<?php 
    if($status=='1'){
        header ("location:final.php");
    }
?>
<h4 class="m-t-0 header-title">Silahkan Lengkapi Data Dan Berkas Anda!</h4>
<ul id="wizard-callbacks-header" class="stepy-header">
    <li id="wizard-callbacks-head-0" style="cursor: default;"><div>1</div><span>Data Diri</span></li>
    <li id="wizard-callbacks-head-1" style="cursor: default;"><div>2</div><span>Data Orang Tua</span></li>
    <li id="wizard-callbacks-head-2" class="stepy-active" style="cursor: default;"><div>3</div><span>Data Riwayat</span></li>
    <li id="wizard-callbacks-head-3" style="cursor: default;"><div>4</div><span>Data Penelitian</span></li>
    <li id="wizard-callbacks-head-4" style="cursor: default;"><div>5</div><span>Berkas Persyaratan</span></li>
</ul>

<div class="row m-t-20">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Data Riwayat Pendidikan</b></h4>
            <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#pendidikan-modal"> <i class="fa fa-plus m-r-5"></i> <span>Tambah Data</span> </button><br><br>
            <table id="dataRiwayatPendidikan" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Tingkat</th>
                    <th>Nama Institusi/Sekolah</th>
                    <th>Jurusan</th>
                    <th>Nilai</th>
                    <th>Tahun Masuk</th>
                    <th>Tahun Lulus</th>
                    <th>Nomor Ijazah</th>
                    <th>File Ijazah</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Data Riwayat Oraganisasi</b></h4>
            <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#organisasi-modal"> <i class="fa fa-plus m-r-5"></i> <span>Tambah Data</span> </button><br><br>
            <table id="dataRiwayatOrganisasi" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nama Organisasi</th>
                    <th>Bidang</th>
                    <th>Jabatan</th>
                    <th>Tahun Masuk</th>
                    <th>Tahun Lulus</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Data Riwayat Prestasi</b></h4>
            <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#prestasi-modal"> <i class="fa fa-plus m-r-5"></i> <span>Tambah Data</span> </button><br><br>
            <table id="dataRiwayatPrestasi" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nama Kegiatan</th>
                    <th>Bidang</th>
                    <th>Peringkat</th>
                    <th>Tingkat</th>
                    <th>Penyelenggara</th>
                    <th>Tahun</th>
                    <th>Sertifikat</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <p class="stepy-navigator">
        <a href="?mod=dataorangtua" class="button-back btn btn-default waves-effect pull-left"><i class="mdi mdi-arrow-left-bold"></i> Back</a>
        <a href="?mod=datapenelitian" class="button-next btn btn-primary waves-effect waves-light">Next <i class="mdi mdi-arrow-right-bold"></i></a>
    </p>
</div>

<!-- Custom Modals -->
<!-- Signup modal content -->
<div id="pendidikan-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-body p-t-0">
                <h4 class="header-title m-t-0 m-b-30">Form Tambah Data Pendidikan</h4>
                <!-- <h2 class="text-uppercase text-center m-b-30">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo_dark.png" alt="" height="30"></span>
                    </a>
                </h2> -->
                <form class="form-horizontal" action="" id="formAddDataPendidikan">
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="tingkat">Tingkat</label>
                            <select class="form-control" name="texttingkat" id="texttingkat">
                                <option value="">----- Pilih Tingkat -----</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="textinstitusi">Nama Institusi</label>
                            <input class="form-control" type="text" id="textinstitusi" name="textinstitusi" required="" placeholder="Nama Institusi">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="textjurusan">Jurusan</label>
                            <input class="form-control" type="text" id="textjurusan" name="textjurusan" required="" placeholder="Jurusan">
                            <span class="help-block"><small>Jika tidak ada cukup isi dengan tanda " - "</small></span>
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="textnilai">Nilai</label>
                            <input class="form-control" type="number" id="textnilai" name="textnilai" required="" placeholder="Nilai Rata-rata">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="texttahunmasuk">Tahun Masuk</label>
                            <input class="form-control" type="number" id="texttahunmasuk" name="texttahunmasuk" required="" placeholder="Tahun Masuk">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="texttahunlulus">Tahun Lulus</label>
                            <input class="form-control" type="number" id="texttahunlulus" name="texttahunlulus" required="" placeholder="Tahun Lulus">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="textnomorijazah">Nomor Ijazah</label>
                            <input class="form-control" type="text" id="textnomorijazah" name="textnomorijazah" required="" placeholder="Nomor Ijazah">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="fileijazah">File Ijazah</label>
                            <input type="file" required="" id="fileToUpload" accept="application/pdf" name="fileToUpload" class="form-control">
                            <span class="help-block"><small>Masukkan file bertype <b><i>*pdf</i></b></small></span>
                        </div>
                    </div>
                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-xs-12">
                            <button class="btn btn-primary waves-effect waves-light" type="submit"><i class="mdi mdi-content-save"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Signup modal content -->
<div id="prestasi-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-body p-t-0">
                <h4 class="header-title m-t-0 m-b-30">Form Tambah Data Prestasi</h4>
                <!-- <h2 class="text-uppercase text-center m-b-30">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo_dark.png" alt="" height="30"></span>
                    </a>
                </h2> -->
                <form class="form-horizontal" action="" id="formAddDataPrestasi">
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="textlomba">Nama Lomba</label>
                            <input class="form-control" type="text" id="textlomba" name="textlomba" required="" placeholder="Nama Institusi">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="textbidang">Bidang Lomba</label>
                            <input class="form-control" type="text" id="textbidang" name="textbidang" required="" placeholder="Nama Institusi">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="texttingkatlomba">Tingkat</label>
                            <select class="form-control" name="texttingkatlomba" id="texttingkatlomba">
                                <option value="">------ Pilih Tingkat Lomba ------</option>
                                <option value="Nasional">Nasional</option>
                                <option value="Provinsi">Provinsi</option>
                                <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                                <option value="Umum">Umum</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="textperingkat">Peringkat</label>
                            <input class="form-control" type="number" id="textperingkat" name="textperingkat" required="" placeholder="Peringkat">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="textpenyelenggara">Penyelenggara</label>
                            <input class="form-control" type="text" id="textpenyelenggara" name="textpenyelenggara" required="" placeholder="Penyelenggara">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="texttahun">Tahun</label>
                            <input class="form-control" type="number" id="texttahun" name="texttahun" required="" placeholder="Tahun">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="filesertifikat">File Sertifikat</label>
                            <input type="file" required="" id="fileToUpload" accept="application/pdf" name="fileToUpload" class="form-control">
                            <span class="help-block"><small>Masukkan file bertype <b><i>*pdf</i></b></small></span>
                        </div>
                    </div>
                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-xs-12">
                            <button class="btn btn-primary waves-effect waves-light" type="submit"><i class="mdi mdi-content-save"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Signup modal content -->
<div id="organisasi-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-body p-t-0">
                <h4 class="header-title m-t-0 m-b-30">Form Tambah Data Organisasi</h4>
                <!-- <h2 class="text-uppercase text-center m-b-30">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo_dark.png" alt="" height="30"></span>
                    </a>
                </h2> -->
                <form class="form-horizontal" action="" id="formAddDataOrganisasi">
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="textorganisasi">Nama Organisasi</label>
                            <input class="form-control" type="text" id="textorganisasi" name="textorganisasi" required="" placeholder="Nama Organisasi">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="textbidang">Bidang</label>
                            <input class="form-control" type="text" id="textbidang" name="textbidang" required="" placeholder="Bidang">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="textjabatan">Jabatan</label>
                            <input class="form-control" type="text" id="textjabatan" required="" name="textjabatan" placeholder="Jabatan">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="texttahunmasuk">Tahun Masuk</label>
                            <input class="form-control" type="number" id="texttahunmasuk" name="texttahunmasuk" required="" placeholder="Tahun Masuk">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="texttahunlulus">Tahun Lulus</label>
                            <input class="form-control" type="number" id="texttahunlulus" name="texttahunlulus" required="" placeholder="Tahun Lulus">
                        </div>
                    </div>
                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-xs-12">
                            <button class="btn btn-primary waves-effect waves-light" type="submit"><i class="mdi mdi-content-save"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End row -->