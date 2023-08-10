<br>
<h2 class="m-t-0 header-title">Berikut Timeline Proses Penerimaan Beasiswa Baznas Kabupaten Enrekang</h2>
<br>
<div class="row">
    <div class="col-xs-12">
        <div class="card-box">
            <div class="timeline">
                <article class="timeline-item alt">
                    <div class="text-right">
                        <div class="time-show first">
                            <a href="#" class="btn btn-primary w-lg">Proses Pendaftaran</a>
                        </div>
                    </div>
                </article>
                <article class="timeline-item alt">
                    <div class="timeline-desk">
                        <div class="panel">
                            <div class="timeline-box">
                                <span class="arrow-alt"></span>
                                <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                <h4 class=""><?php echo $tanggalmulaidaftar; ?></h4>
                                <p>Proses Pendaftaran telah dimulai dan sekarang sudah ada <?php echo $jumlahpeserta; ?> pendaftar</p>
                            </div>
                        </div>
                    </div>
                </article>
                <?php if($tglskarang>=$tanggalakhirdaftar){ ?>
                <article class="timeline-item alt">
                    <div class="text-right">
                        <div class="time-show">
                            <a href="#" class="btn btn-primary w-lg">Pendaftaran Berakhir</a>
                        </div>
                    </div>
                </article>
                <article class="timeline-item">
                    <div class="timeline-desk">
                        <div class="panel">
                            <div class="timeline-box">
                                <span class="arrow"></span>
                                <span class="timeline-icon bg-warning"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                <h4 class="text-warning"><?php echo $tanggalakhirdaftar; ?></h4>
                                <p>Proses Pendaftaran telah Berakhir dengan <?php echo $jumlahpeserta; ?> pendaftar</span>
                                </p>

                            </div>
                        </div>
                    </div>
                </article>
                <?php } ?>
                <?php if($tglskarang>=$tanggalpemeriksaan){ ?>
                <article class="timeline-item alt">
                    <div class="text-right">
                        <div class="time-show">
                            <a href="#" class="btn btn-primary w-lg">Proses Pemeriksaan</a>
                        </div>
                    </div>
                </article>

                <article class="timeline-item alt">
                    <div class="timeline-desk">
                        <div class="panel">
                            <div class="timeline-box">
                                <span class="arrow-alt"></span>
                                <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                <h4 class="text-muted"><?php echo $tanggalpemeriksaan; ?></h4>
                                <p>Proses Pemeriksaan telah dimulai, <?php if($statuslowongan=='0'){ ?> Silahkan Klik tombol dibawah Ini Untuk Melakukan Pemeriksaan Otomatis <br><br><a href="#" class="btn btn-warning w-lg">Mulai Proses Penilaian Otomatis !</a><?php }else{ ?> Pemeriksaan Otomatis Telah dilakukan, pengumuman akan di publish sesuai dengan jadwal<?php } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                <?php } ?>
                <?php if($tglskarang>=$tanggalpengumuman){ ?>
                <article class="timeline-item alt">
                    <div class="text-right">
                        <div class="time-show">
                            <a href="#" class="btn btn-primary w-lg">Pengumuman</a>
                        </div>
                    </div>
                </article>

                <article class="timeline-item">
                    <div class="timeline-desk">
                        <div class="panel">
                            <div class="timeline-box">
                                <span class="arrow"></span>
                                <span class="timeline-icon bg-warning"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                <h4 class="text-warning"><?php echo $tanggalpengumuman; ?></h4>
                                <p>Pengumuman Telah Selesai</p>

                            </div>
                        </div>
                    </div>
                </article>
                <?php } ?>
            </div>
            <?php if($tglskarang>=$tanggalpengumuman){ ?>
            <br><br>
            <!-- end timeline -->
            <div class="card-box table-responsive">
                <h3 class="m-t-0 header-title"><b>Daftar Peserta Yang Berhasil Lolos</b></h3>
                <br>
                <table style="width:50%;">
                    <tr>
                        <td><h4 class="m-t-0 header-title"><b>Tema</b></h4></td>
                        <td width="10px"><h4 class="m-t-0 header-title"><b>: </b></h4></td>
                        <td><h4 class="m-t-0 header-title"><?php echo $tema; ?></h4></td>
                    </tr>
                    <tr>
                        <td><h4 class="m-t-0 header-title"><b>Tanggal</b></h4></td>
                        <td width="10px"><h4 class="m-t-0 header-title"><b>: </b></h4></td>
                        <td><h4 class="m-t-0 header-title"><?php echo $tanggalmulaidaftar." Sampai Dengan ".$tanggalakhirdaftar; ?></h4></td>
                    </tr>
                    <tr>
                        <td><h4 class="m-t-0 header-title"><b>Jumlah Lowongan</b></h4></td>
                        <td width="10px"><h4 class="m-t-0 header-title"><b>: </b></h4></td>
                        <td><h4 class="m-t-0 header-title"><?php echo $jumlah; ?></h4></td>
                    </tr>
                </table><br><br>
                <table id="dataPesertaLolos" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nomor Peserta</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Nama Kampus</th>
                        <th>Program Studi</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <?php } ?>
        </div>
    </div>
</div>