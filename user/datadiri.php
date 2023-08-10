<?php 
	if($status=='1'){
    	header ("location:final.php");
	}
?>
<h4 class="m-t-0 header-title">Silahkan Lengkapi Data Dan Berkas Anda!</h4>
<ul id="wizard-callbacks-header" class="stepy-header">
	<li id="wizard-callbacks-head-0" class="stepy-active" style="cursor: default;"><div>1</div><span>Data Diri</span></li>
	<li id="wizard-callbacks-head-1" style="cursor: default;"><div>2</div><span>Data Orang Tua</span></li>
	<li id="wizard-callbacks-head-2" style="cursor: default;"><div>3</div><span>Data Riwayat</span></li>
	<li id="wizard-callbacks-head-3" style="cursor: default;"><div>4</div><span>Data Penelitian</span></li>
	<li id="wizard-callbacks-head-4" style="cursor: default;"><div>5</div><span>Berkas Persyaratan</span></li>
</ul>

<form action="" id="formAddDataDiri">
	<div class="row m-t-20">
	    <div class="col-sm-6">
	        <div class="form-group">
	            <label for="nik">Nomor Induk Kependudukan (NIK)</label>
	            <input type="text" class="form-control" id="nik" placeholder="123456789" name="nik" required <?php if($ss==1){echo "value='$nik'";} ?>>
	        </div>

	        <div class="form-group">
	            <label for="tempatlahir">Tempat Lahir</label>
	            <input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir" name="tempatlahir" required <?php if($ss==1){echo "value='$tempatlahir'";} ?>>
	        </div>

	        <div class="form-group">
	            <label for="jeniskelamin">Jenis Kelamin</label>
	            <select class="form-control" name="jeniskelamin" required>
	                <option>----- Silahkan Pilih Jenis Kelamin -----</option>
	                <option value="L" <?php if(($ss==1) && ($jk=="L")){echo "selected";} ?>>Laki - laki</option>
	                <option value="P" <?php if(($ss==1) && ($jk=="P")){echo "selected";} ?>>Perempuan</option>
	            </select>
	        </div>

	        <div class="form-group">
	            <label for="statuskawin">Status Perkawinan</label>
	            <select class="form-control" name="statuskawin" required>
	                <option>----- Silahkan Pilih Status Perkawinan -----</option>
	                <option value="Kawin" <?php if(($ss==1) && ($statuskawin=="Kawin")){echo "selected";} ?>>Kawin</option>
	                <option value="Belum Kawin" <?php if(($ss==1) && ($statuskawin=="Belum Kawin")){echo "selected";} ?>>Belum Kawin</option>
	                <option value="Cerai Hidup" <?php if(($ss==1) && ($statuskawin=="Cerai Hidup")){echo "selected";} ?>>Cerai Hidup</option>
	                <option value="Cerai Mati" <?php if(($ss==1) && ($statuskawin=="Cerai Mati")){echo "selected";} ?>>Cerai Mati</option>
	            </select>
	        </div>

	        <div class="form-group">
	            <label for="asaluniv">Asal Universitas</label>
	            <input type="text" class="form-control" id="asaluniv" placeholder="Asal Universitas" name="asaluniv" required <?php if($ss==1){echo "value='$asaluniv'";} ?>>
	        </div>

	        <div class="form-group">
	            <label for="fakultas">Fakultas</label>
	            <input type="text" class="form-control" id="fakultas" placeholder="Asal Fakultas" name="fakultas" required <?php if($ss==1){echo "value='$fakultas'";} ?>>
	        </div>

	        <div class="form-group">
	            <label for="programstudi">Program Studi</label>
	            <input type="text" class="form-control" id="programstudi" placeholder="Asal Program Studi" name="programstudi" required <?php if($ss==1){echo "value='$programstudi'";} ?>>
	        </div>

	        <div class="form-group">
	            <label for="ipk">IPK Terakhir</label>
	            <input type="number" class="form-control" id="ipk" placeholder="4.00" name="ipk" required <?php if($ss==1){echo "value='$ipk'";} ?>>
	        </div>

	    </div>
	    <div class="col-sm-6">
	        <div class="form-group">
	            <label for="namalengkap">Nama Lengkap</label>
	            <input type="text" class="form-control" id="namalengkap" placeholder="Nama Lengkap" name="namalengkap" required <?php if($ss==1){echo "value='$namalengkap'";} ?>>
	        </div>

	        <div class="form-group">
	            <label for="tanggallahir">Tanggal Lahir</label>
	            <input type="date" class="form-control" id="tanggallahir" placeholder="" name="tanggallahir" required <?php if($ss==1){echo "value='$tanggallahir'";} ?>>
	        </div>

	        <div class="form-group">
	            <label for="agama">Agama</label>
	            <select class="form-control" name="agama" required>
	                <option value="">----- Silahkan Pilih Agama -----</option>
	                <option value="Islam" <?php if(($ss==1) && ($agama=="Islam")){echo "selected";} ?>>Islam</option>
	                <option value="Katolik" <?php if(($ss==1) && ($agama=="Katolik")){echo "selected";} ?>>Katolik</option>
	                <option value="Protestan" <?php if(($ss==1) && ($agama=="Protestan")){echo "selected";} ?>>Protestan</option>
	                <option value="Buddha" <?php if(($ss==1) && ($agama=="Buddha")){echo "selected";} ?>>Buddha</option>
	                <option value="Hindu" <?php if(($ss==1) && ($agama=="Hindu")){echo "selected";} ?>>Hindu</option>
	                <option value="Khonghucu" <?php if(($ss==1) && ($agama=="Khonghucu")){echo "selected";} ?>>Khonghucu</option>
	            </select>
	        </div>

	        <div class="form-group">
	            <label for="nomorhp">Nomor Handphone</label>
	            <input type="text" class="form-control" id="nomorhp" placeholder="08123456789" name="nomorhp" required <?php if($ss==1){echo "value='$nomorhp'";} ?>>
	        </div>

	        <div class="form-group">
	            <label for="akreditasikampus">Akreditasi Kampus</label>
	            <select class="form-control" name="akreditasikampus" required>
	                <option value="">----- Silahkan Pilih Akreditasi Kampus -----</option>
	                <option value="Sangat Baik" <?php if(($ss==1) && ($akreditasikampus=="Sangat Baik")){echo "selected";} ?>>Sangat Baik</option>
	                <option value="Baik" <?php if(($ss==1) && ($akreditasikampus=="Baik")){echo "selected";} ?>>Baik</option>
	                <option value="Unggul" <?php if(($ss==1) && ($akreditasikampus=="Unggul")){echo "selected";} ?>>Unggul</option>
	                <option value="Tidak Terakreditasi" <?php if(($ss==1) && ($akreditasikampus=="Tidak Terakreditasi")){echo "selected";} ?>>Tidak Terakreditasi</option>
	            </select>
	        </div>

	        <br><br><br><br>

	        <div class="form-group">
	            <label for="akreditasiprodi">Akreditasi Program Studi</label>
	            <select class="form-control" name="akreditasiprodi" required>
	                <option value="">----- Silahkan Pilih Akreditasi Program Studi -----</option>
	                <option value="Sangat Baik" <?php if(($ss==1) && ($akreditasiprodi=="Sangat Baik")){echo "selected";} ?>>Sangat Baik</option>
	                <option value="Baik" <?php if(($ss==1) && ($akreditasiprodi=="Baik")){echo "selected";} ?>>Baik</option>
	                <option value="Unggul" <?php if(($ss==1) && ($akreditasiprodi=="Unggul")){echo "selected";} ?>>Unggul</option>
	                <option value="Tidak Terakreditasi" <?php if(($ss==1) && ($akreditasiprodi=="Tidak Terakreditasi")){echo "selected";} ?>>Tidak Terakreditasi</option>
	            </select>
	        </div>

	    </div>
	</div>
	<p class="stepy-navigator"><button type="submit" class="button-next btn btn-primary waves-effect waves-light">Next <i class="mdi mdi-arrow-right-bold"></i></button></p>
</form>