<h4 class="m-t-0 header-title">Silahkan Lengkapi Data Dan Berkas Anda!</h4>
<ul id="wizard-callbacks-header" class="stepy-header">
	<li id="wizard-callbacks-head-0" style="cursor: default;"><div>1</div><span>Data Diri</span></li>
	<li id="wizard-callbacks-head-1" style="cursor: default;"><div>2</div><span>Data Orang Tua</span></li>
	<li id="wizard-callbacks-head-2" style="cursor: default;"><div>3</div><span>Data Riwayat</span></li>
	<li id="wizard-callbacks-head-3" style="cursor: default;"><div>4</div><span>Data Penelitian</span></li>
	<li id="wizard-callbacks-head-4" class="stepy-active" style="cursor: default;"><div>5</div><span>Berkas Persyaratan</span></li>
</ul>

<form action="" id="formAddDataBerkas">
    <div class="row m-t-20">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="username">Foto Diri</label>
                <input type="file" class="filestyle" required="" id="fotoDiri" accept="application/pdf" data-buttonname="btn-default" name="fotoDiri" class="form-control">
                <?php if($ss==1 && $diri!=""){echo "<b><p><a href=\"berkas/$diri\" target=\"_blank\">Click Here to Check File!</a></p></b>";} ?>
            </div>

            <div class="form-group">
                <label for="username">Kartu Keluarga (KK)</label>
                <input type="file" class="filestyle" required="" id="kartuKeluarga" accept="application/pdf" data-buttonname="btn-default" name="kartuKeluarga" class="form-control">
                <?php if($ss==1 && $kk!=""){echo "<b><p><a href=\"berkas/$kk\" target=\"_blank\">Click Here to Check File!</a></p></b>";} ?>
            </div>

            <div class="form-group">
                <label for="username">Kartu Tanda Penduduk (KTP)</label>
                <input type="file" class="filestyle" required="" id="tandaPenduduk" accept="application/pdf" data-buttonname="btn-default" name="tandaPenduduk" class="form-control">
                <?php if($ss==1 && $ktp!=""){echo "<b><p><a href=\"berkas/$ktp\" target=\"_blank\">Click Here to Check File!</a></p></b>";} ?>
            </div>

            <div class="form-group">
                <label for="username">Kartu Tanda Mahasiswa</label>
                <input type="file" class="filestyle" required="" id="tandaMahasiswa" accept="application/pdf" data-buttonname="btn-default" name="tandaMahasiswa" class="form-control">
                <?php if($ss==1 && $ktm!=""){echo "<b><p><a href=\"berkas/$ktm\" target=\"_blank\">Click Here to Check File!</a></p></b>";} ?>
            </div>

            <div class="form-group">
                <label for="username">Curriculum Vitae / Daftar Riwayat Hidup</label>
                <input type="file" class="filestyle" required="" id="riwayatHidup" accept="application/pdf" data-buttonname="btn-default" name="riwayatHidup" class="form-control">
                <?php if($ss==1 && $cv!=""){echo "<b><p><a href=\"berkas/$cv\" target=\"_blank\">Click Here to Check File!</a></p></b>";} ?>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="username">Surat Pernyataan</label>
                <input type="file" class="filestyle" required="" id="suratPernyataan" accept="application/pdf" data-buttonname="btn-default" name="suratPernyataan" class="form-control">
                <?php if($ss==1 && $pernyataan!=""){echo "<b><p><a href=\"berkas/$pernyataan\" target=\"_blank\">Click Here to Check File!</a></p></b>";} ?>
            </div>

            <div class="form-group">
                <label for="username">Surat Rekomendasi Tokoh</label>
                <input type="file" class="filestyle" required="" id="suratRekomendasi" accept="application/pdf" data-buttonname="btn-default" name="suratRekomendasi" class="form-control">
                <?php if($ss==1 && $rekomendasi!=""){echo "<b><p><a href=\"berkas/$rekomendasi\" target=\"_blank\">Click Here to Check File!</a></p></b>";} ?>
            </div>

            <div class="form-group">
                <label for="username">Surat Keterangan Aktif Kuliah</label>
                <input type="file" class="filestyle" required="" id="aktifKuliah" accept="application/pdf" data-buttonname="btn-default" name="aktifKuliah" class="form-control">
                <?php if($ss==1 && $aktifkuliah!=""){echo "<b><p><a href=\"berkas/$aktifkuliah\" target=\"_blank\">Click Here to Check File!</a></p></b>";} ?>
            </div>

            <div class="form-group">
                <label for="username">Transkrip Nilai Terakhir</label>
                <input type="file" class="filestyle" required="" id="nilaiAkhir" accept="application/pdf" data-buttonname="btn-default" name="nilaiAkhir" class="form-control">
                <?php if($ss==1 && $transkirp!=""){echo "<b><p><a href=\"berkas/$transkirp\" target=\"_blank\">Click Here to Check File!</a></p></b>";} ?>
            </div>

            <div class="form-group">
                <label for="username">Portofolio</label>
                <input type="file" class="filestyle" required="" id="lembarPorto" accept="application/pdf" data-buttonname="btn-default" name="lembarPorto" class="form-control">
                <?php if($ss==1 && $portofolio!=""){echo "<b><p><a href=\"berkas/$portofolio\" target=\"_blank\">Click Here to Check File!</a></p></b>";} ?>
            </div>
        </div>
    </div>
    <p class="stepy-navigator">
        <a href="?mod=dataorangtua" class="button-back btn btn-default waves-effect pull-left"><i class="mdi mdi-arrow-left-bold"></i> Back</a>
        <button type="submit" class="button-next btn btn-primary waves-effect waves-light">Simpan</button>
    </p>
</form>
<br><br><br>
<!-- Custom Modals -->
<div class="row">
    <div class="col-md-12" style="background: rgba(255, 253, 208,0.5); padding: 25px;">
            <ul style=“list-style-type:square”>
                <li>Silahkan periksa kembali semua data yang telah anda masukkan</li>
                <li>Jika terdapat data yang terbukti palsu maka peserta akan dinyatakan diskualifikasi</li>
                <li><b>Setelah Mengkahiri Pengisian Biodata Maka Data Tidak Bisa Di Edit Kembali</b></li>
            </ul>
            <br>
        <center>
            <a href="#" onclick="akhiripendaftaran()" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-content-save"></i> Akhiri Pengisian Biodata</a>
        </center>
    </div>
</div>