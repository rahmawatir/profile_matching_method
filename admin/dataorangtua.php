<h4 class="m-t-0 header-title">Silahkan Lengkapi Data Dan Berkas Anda!</h4>
<ul id="wizard-callbacks-header" class="stepy-header">
	<li id="wizard-callbacks-head-0" style="cursor: default;"><div>1</div><span>Data Diri</span></li>
	<li id="wizard-callbacks-head-1"  class="stepy-active" style="cursor: default;"><div>2</div><span>Data Orang Tua</span></li>
	<li id="wizard-callbacks-head-2" style="cursor: default;"><div>3</div><span>Data Riwayat</span></li>
	<li id="wizard-callbacks-head-3" style="cursor: default;"><div>4</div><span>Data Penelitian</span></li>
	<li id="wizard-callbacks-head-4" style="cursor: default;"><div>5</div><span>Berkas Persyaratan</span></li>
</ul>

<form action="" id="formAddDataOrangTua">
    <div class="row m-t-20">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="namaayah">Nama Ayah</label>
                <input type="text" class="form-control" id="namaayah" placeholder="Nama Lengkap Ayah" name="namaayah" required <?php if($ss==1){echo "value='$namaayah'";} ?>>
            </div>

            <div class="form-group">
                <label for="pekerjaanayah">Pekerjaan Ayah</label>
                <input type="text" class="form-control" id="pekerjaanayah" placeholder="Pekerjaan Ayah" name="pekerjaanayah" required <?php if($ss==1){echo "value='$pekerjaanayah'";} ?>>
            </div>
            <div class="form-group">
                <label for="penghasilanayah">Penghasilan Ayah Per Bulan</label>
                <input type="number" class="form-control" id="penghasilanayah" placeholder="" name="penghasilanayah" required <?php if($ss==1){echo "value='$penghasilanayah'";} ?>>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="namaibu">Nama Ibu</label>
                <input type="text" class="form-control" id="namaibu" placeholder="Nama Lengkap Ibu" name="namaibu" required <?php if($ss==1){echo "value='$namaibu'";} ?>>
            </div>

            <div class="form-group">
                <label for="pekerjaanibu">Pekerjaan Ibu</label>
                <input type="text" class="form-control" id="pekerjaanibu" placeholder="Pekerjaan Ibu" name="pekerjaanibu" required <?php if($ss==1){echo "value='$pekerjaanibu'";} ?>>
            </div>
            <div class="form-group">
                <label for="penghasilanibu">Penghasilan Ibu Per Bulan</label>
                <input type="number" class="form-control" id="penghasilanibu" placeholder="" name="penghasilanibu" required <?php if($ss==1){echo "value='$penghasilanibu'";} ?>>
            </div>
        </div>
    </div>
    <p class="stepy-navigator">
        <a href="?mod=datadiri" class="button-back btn btn-default waves-effect pull-left"><i class="mdi mdi-arrow-left-bold"></i> Back</a>
        <button type="submit" class="button-next btn btn-primary waves-effect waves-light">Next <i class="mdi mdi-arrow-right-bold"></i></button>
    </p>
</form>