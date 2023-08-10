<?php 
    if($status=='1'){
        header ("location:final.php");
    }
?>
<h4 class="m-t-0 header-title">Silahkan Lengkapi Data Dan Berkas Anda!</h4>
<ul id="wizard-callbacks-header" class="stepy-header">
	<li id="wizard-callbacks-head-0" style="cursor: default;"><div>1</div><span>Data Diri</span></li>
	<li id="wizard-callbacks-head-1" style="cursor: default;"><div>2</div><span>Data Orang Tua</span></li>
	<li id="wizard-callbacks-head-2" style="cursor: default;"><div>3</div><span>Data Riwayat</span></li>
	<li id="wizard-callbacks-head-3" class="stepy-active" style="cursor: default;"><div>4</div><span>Data Penelitian</span></li>
	<li id="wizard-callbacks-head-4" style="cursor: default;"><div>5</div><span>Berkas Persyaratan</span></li>
</ul>

<form action="" id="formAddDataPenelitian">
    <div class="row m-t-20">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="judul">Judul Penelitian</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="" required="" <?php if($ss==1){echo "value='$judul'";} ?>>
            </div>

            <div class="form-group">
                <label for="abstrak">Abstrak Penelitian</label>
                <textarea class="form-control" rows="20" id="abstrak" name="abstrak" required=""><?php if($ss==1){echo "$abstrak";} ?></textarea>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="username">Proposal Penelitian</label>
                <input type="file" class="filestyle" required="" id="fileToUpload" accept="application/pdf" data-buttonname="btn-default" name="fileToUpload" class="form-control">
                <?php if($ss==1 && $proposal!=""){echo "<b><p><a href=\"berkas/$proposal\" target=\"_blank\">Click Here to Check File!</a></p></b>";} ?>
            </div>

            <div class="form-group">
                <label for="username">PPT Penelitian</label>
                <input type="file" class="filestyle" required="" id="fileToUpload2" accept="application/pdf" data-buttonname="btn-default" name="fileToUpload2" class="form-control">
                <?php if($ss==1 && $proposal!=""){echo "<b><p><a href=\"berkas/$ppt\" target=\"_blank\">Click Here to Check File!</a></p></b>";} ?>
            </div>

        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="kategori">Kategori Penelitian</label>
                <select class="form-control" required="" name="kategori" id="kategori">
                    <option value="">----- Silahkan Pilih Kategori Penelitian -----</option>
                    <?php
                        $qkategori = mysqli_query($con, "SELECT * FROM tb_kategori");
                        while ($c=mysqli_fetch_array($qkategori)) {
                            if(($ss==1) && ($c['idkategori']==$kategori)){
                                echo "<option value=\"$c[idkategori]\" selected>$c[namakategori]</option>";
                            }else{
                                echo "<option value=\"$c[idkategori]\">$c[namakategori]</option>";
                            }
                        }
                    ?>
                </select>
            </div>

        </div>
    </div>

    <p class="stepy-navigator">
        <a href="?mod=datariwayat" class="button-back btn btn-default waves-effect pull-left"><i class="mdi mdi-arrow-left-bold"></i> Back</a>
        <button type="submit" class="button-next btn btn-primary waves-effect waves-light">Next <i class="mdi mdi-arrow-right-bold"></i></button>
    </p>
</form>