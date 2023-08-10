<br>
<br>
<center><h2 class="m-t-0 header-title">Resume Biodata</h2></center>
<div class="row m-t-20">
    <div class="col-sm-12">
        <table class="tablesaw m-t-20 table m-b-0 tablesaw-stack">
            <tbody>
              <tr>
                <td rowspan="25" style="min-width:200px; max-width: 300px;"><img src="<?php echo '../berkas/'.$diri; ?>" alt="Foto Profil" style="min-width:200px; max-width: 290px;"></td>
                <td><b>Nama</b></td>
                <td>:</td>
                <td style="min-width:200px"><?php echo $namalengkap; ?></td>
                <td rowspan="25"></td>
                <td><b>NIK</b></td>
                <td>:</td>
                <td style="min-width:200px"><?php echo $nik; ?></td>
              </tr>
              <tr>
                <td><b>Tempat Lahir</b></td>
                <td>:</td>
                <td><?php echo $tempatlahir; ?></td>
                <td><b>Nomor Peserta</b></td>
                <td>:</td>
                <td><?php echo $nomorpeserta; ?></td>
              </tr>
              <tr>
                <td><b>Tanggal Lahir</b></td>
                <td>:</td>
                <td><?php echo $tanggallahir; ?></td>
                <td><b>Jenis Kelamin</b></td>
                <td>:</td>
                <td><?php echo $jk; ?></td>
              </tr>
              <tr>
                <td><b>Agama</b></td>
                <td>:</td>
                <td><?php echo $agama; ?></td>
                <td><b>Status Perkawinan</b></td>
                <td>:</td>
                <td><?php echo $statuskawin; ?></td>
              </tr>
              <tr>
                <td><b>Nomor Handphone</b></td>
                <td>:</td>
                <td><?php echo $nomorhp; ?></td>
                <td><b>Tanggal Daftar</b></td>
                <td>:</td>
                <td><?php echo $tgldaftar; ?></td>
              </tr>
              <tr>
                <td><b>Asal Universitas</b></td>
                <td>:</td>
                <td><?php echo $asaluniv; ?></td>
                <td><b>Akreditasi Kampus</b></td>
                <td>:</td>
                <td><?php echo $akreditasikampus; ?></td>
              </tr>
              <tr>
                <td><b>Fakultas</b></td>
                <td>:</td>
                <td><?php echo $fakultas; ?></td>
                <td><b></b></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><b>Program Studi</b></td>
                <td>:</td>
                <td><?php echo $programstudi; ?></td>
                <td><b>Akreditasi Prodi</b></td>
                <td>:</td>
                <td><?php echo $akreditasiprodi; ?></td>
              </tr>
              <tr>
                <td><b>Judul Proposal</b></td>
                <td>:</td>
                <td><?php echo $judul; ?></td>
                <td><b>Kategori</b></td>
                <td>:</td>
                <td><?php $qkat = mysqli_query ($con, "SELECT * FROM tb_kategori WHERE idkategori='$kategori'");
                $row = mysqli_fetch_array($qkat);
                echo $row['namakategori']; ?></td>
              </tr>
              <tr>
                <td colspan="7"></td>
              </tr>
              <tr>
                <td colspan="7"></td>
              </tr>
              <tr>
                <td colspan="7"><center><h4 class="m-t-0 header-title">Kelengkapan Berkas</h4></center></td>
              </tr>
              <tr>
                <td colspan="6">Kartu Keluarga</td>
                <td><a href="../berkas/<?php echo $kk;?>" target="_blank" class="btn btn-success waves-effect waves-light"> <i class="fa fa-file m-r-5"></i> <span>Cek File</span></a></td>
              </tr>
              <tr>
                <td colspan="6">Kartu Tanda Penduduk</td>
                <td><a href="../berkas/<?php echo $ktp;?>" target="_blank" class="btn btn-success waves-effect waves-light"> <i class="fa fa-file m-r-5"></i> <span>Cek File</span></a></td>
              </tr>
              <tr>
                <td colspan="6">Surat Pernyataan</td>
                <td><a href="../berkas/<?php echo $pernyataan;?>" target="_blank" class="btn btn-success waves-effect waves-light"> <i class="fa fa-file m-r-5"></i> <span>Cek File</span></a></td>
              </tr>
              <tr>
                <td colspan="6">Surat Rekomendasi</td>
                <td><a href="../berkas/<?php echo $rekomendasi;?>" target="_blank" class="btn btn-success waves-effect waves-light"> <i class="fa fa-file m-r-5"></i> <span>Cek File</span></a></td>
              </tr>
              <tr>
                <td colspan="6">Surat Keterangan Aktif Kuliah</td>
                <td><a href="../berkas/<?php echo $aktifkuliah;?>" target="_blank" class="btn btn-success waves-effect waves-light"> <i class="fa fa-file m-r-5"></i> <span>Cek File</span></a></td>
              </tr>
              <tr>
                <td colspan="6">Transkirp Nilai</td>
                <td><a href="../berkas/<?php echo $transkirp;?>" target="_blank" class="btn btn-success waves-effect waves-light"> <i class="fa fa-file m-r-5"></i> <span>Cek File</span></a></td>
              </tr>
              <tr>
                <td colspan="6">Kartu Tanda Mahasiswa</td>
                <td><a href="../berkas/<?php echo $ktm;?>" target="_blank" class="btn btn-success waves-effect waves-light"> <i class="fa fa-file m-r-5"></i> <span>Cek File</span></a></td>
              </tr>
              <tr>
                <td colspan="6">Daftar Riwayat Hidup</td>
                <td><a href="../berkas/<?php echo $cv;?>" target="_blank" class="btn btn-success waves-effect waves-light"> <i class="fa fa-file m-r-5"></i> <span>Cek File</span></a></td>
              </tr>
              <tr>
                <td colspan="6">Portofolio</td>
                <td><a href="../berkas/<?php echo $portofolio;?>" target="_blank" class="btn btn-success waves-effect waves-light"> <i class="fa fa-file m-r-5"></i> <span>Cek File</span></a></td>
              </tr>
              <tr>
                <td colspan="6">Proposal</td>
                <td><a href="../berkas/<?php echo $proposal;?>" target="_blank" class="btn btn-success waves-effect waves-light"> <i class="fa fa-file m-r-5"></i> <span>Cek File</span></a></td>
              </tr>
              <tr>
                <td colspan="6">File Presentasi</td>
                <td><a href="../berkas/<?php echo $ppt;?>" target="_blank" class="btn btn-success waves-effect waves-light"> <i class="fa fa-file m-r-5"></i> <span>Cek File</span></a></td>
              </tr>
            </tbody>
        </table>
        <br><br><br>
    </div>
</div>