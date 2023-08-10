<div class="row">
    <div class="col-xs-6">
        <div class="card-box">
            <h3 class="m-t-0 header-title"><b>Tambah Kategori</b></h3>
            <br>
            <form class="form-horizontal" action="" id="formAddDataKategori">
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="textorganisasi">Nama Kategori</label>
                            <input class="form-control" type="text" id="textorganisasi" name="textorganisasi" required="" placeholder="Nama Kategori">
                        </div>
                    </div>
                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-xs-12">
                            <button class="btn btn-primary waves-effect waves-light" type="submit"><i class="mdi mdi-content-save"></i> Simpan</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="card-box">
            <h3 class="m-t-0 header-title"><b>Data Kategori</b></h3>
            <br>
            <table id="dataKategori" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th style="width:60px;">Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>