<?php
    if(file_exists('koneksi.php')){
        include 'koneksi.php';
        session_start();
        if(isset($_GET['page'])){
            if($_GET['page']=="proseslogin"){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = mysqli_query ($con, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
                if(mysqli_num_rows($query)==1){//jika berhasil akan bernilai 1
                    $c = mysqli_fetch_array($query);
                    $_SESSION['username'] = $c['username'];
                    $_SESSION['level'] = $c['level'];
                    if($c['level']=="Admin"){
                        $_SESSION['username'] = $c['username'];
                        echo "Berhasil Login Sebagai Administrator Baznas";
                    }
                    else if($c['level']=="User"){
                          echo "Berhasil Login Sebagai User Baznas";
                    }else{
                        echo "Akun Anda Tidak Terdaftar";
                    }
                }else{
                    echo "Username Password Salah";
                    exit();
                }
            }else if($_GET['page']=="adddatadiri"){
                $username         = $_SESSION['username'];
                $qnope = mysqli_query($con, "SELECT * from tb_peserta ORDER BY nomorpeserta DESC");
                $qnope1 = mysqli_query($con, "SELECT * from tb_peserta WHERE username='$username'");
                $baris = mysqli_fetch_array($qnope);
                if (mysqli_num_rows($qnope)==0){
                  $nopeserta = "BZ00001";
                }else if(substr($baris[1], 2)<9){
                  $nopeserta = "BZ0000".(substr($baris[1], 2)+1);
                }else if(substr($baris[1], 2)<99){
                  $nopeserta = "BZ000".(substr($baris[1], 2)+1);
                }else if(substr($baris[1], 2)<999){
                  $nopeserta = "BZ00".(substr($baris[1], 2)+1);
                }else if(substr($baris[1], 2)<9999){
                  $nopeserta = "BZ0".(substr($baris[1], 2)+1);
                }else if(substr($baris[1], 2)<99999){
                  $nopeserta = "BZ".(substr($baris[1], 2)+1);
                }
                $nik              = $_POST["nik"];
                $namalengkap      = $_POST["namalengkap"];
                $tempatlahir      = $_POST["tempatlahir"];
                $tanggallahir     = $_POST["tanggallahir"];
                $jeniskelamin     = $_POST["jeniskelamin"];
                $agama            = $_POST["agama"];
                $statuskawin      = $_POST["statuskawin"];
                $nomorhp          = $_POST["nomorhp"];
                $asaluniv         = $_POST["asaluniv"];
                $akreditasikampus = $_POST["akreditasikampus"];
                $fakultas         = $_POST["fakultas"];
                $programstudi     = $_POST["programstudi"];
                $akreditasiprodi  = $_POST["akreditasiprodi"];
                $ipk              = $_POST["ipk"];
                $tgldaftar        = date("Y-m-d");
                $status           = 0;
                if (mysqli_num_rows($qnope1)==0){
                    $tambahpeserta    = mysqli_query($con, "INSERT INTO tb_peserta VALUES('$username','$nopeserta','$namalengkap','$nik','$tempatlahir','$tanggallahir','$jeniskelamin','$agama','$statuskawin','$nomorhp','$tgldaftar','$status')");
                    $tambahuniv       = mysqli_query($con, "INSERT INTO tb_kampus VALUES('$username','$asaluniv','$akreditasikampus','$fakultas','$programstudi','$akreditasiprodi','$ipk')");
                    if($tambahpeserta && $tambahuniv){
                      echo "Data Diri Berhasil Di Tambahkan !!!";
                    }else{
                      echo "Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!";
                      echo mysqli_error();
                      exit();
                    }
                }else{
                    $updatepeserta    = mysqli_query($con, "UPDATE tb_peserta SET nik='$nik',nama='$namalengkap', tempatlahir='$tempatlahir', tgllahir='$tanggallahir', jk='$jeniskelamin', agama='$agama', statuskawin='$statuskawin', nohp='$nomorhp' WHERE username = '$username'");
                    $updateuniv       = mysqli_query($con, "UPDATE tb_kampus SET namakampus='$asaluniv',akreditasikampus='$akreditasikampus', fakultas='$fakultas', namaprodi='$programstudi', akreditasiprodi='$akreditasiprodi', ipk='$ipk' WHERE username = '$username'");
                    if($updatepeserta && $updateuniv){
                      echo "Data Diri Berhasil Di Update !!!";
                    }else{
                      echo "Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!";
                      echo mysqli_error();
                      exit();
                    }
                }
            }else if($_GET['page']=="adddataorangtua"){
                $username         = $_SESSION['username'];
                $qnope            = mysqli_query($con, "SELECT * from tb_orangtua WHERE username='$username'");
                $namaayah         = $_POST["namaayah"];
                $pekerjaanayah    = $_POST["pekerjaanayah"];
                $penghasilanayah  = $_POST["penghasilanayah"];
                $namaibu          = $_POST["namaibu"];
                $pekerjaanibu     = $_POST["pekerjaanibu"];
                $penghasilanibu   = $_POST["penghasilanibu"];
                if (mysqli_num_rows($qnope)==0){
                    $tambahorangtua    = mysqli_query($con, "INSERT INTO tb_orangtua VALUES('$username','$namaayah','$pekerjaanayah','$penghasilanayah','$namaibu','$pekerjaanibu','$penghasilanibu')");
                    if($tambahorangtua){
                      echo "Data Orang Tua Berhasil Di Tambahkan !!!";
                    }else{
                      echo "Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!";
                      echo mysqli_error();
                      exit();
                    }
                }else{
                    $updateorangtua    = mysqli_query($con, "UPDATE tb_orangtua SET namaayah='$namaayah',pekerjaanayah='$pekerjaanayah', penghasilanayah='$penghasilanayah', namaibu='$namaibu', pekerjaanibu='$pekerjaanibu', penghasilanibu='$penghasilanibu' WHERE username = '$username'");
                    if($updateorangtua){
                      echo "Data Orang Tua Berhasil Di Update !!!";
                    }else{
                      echo "Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!";
                      echo mysqli_error();
                      exit();
                    }
                }
            }else if($_GET['page']=="addbeasiswa"){
                $jadwalmulai       = $_POST["jadwalmulai"];
                $jadwalberakhir    = $_POST["jadwalberakhir"];
                $jadwalpemeriksaan = $_POST["jadwalpemeriksaan"];
                $jadwalpengumuman  = $_POST["jadwalpengumuman"];
                $temabeasiswa      = $_POST["temabeasiswa"];
                $jumlah            = $_POST["jumlah"];
                $tambahbeasiswa    = mysqli_query($con, "INSERT INTO tb_lowongan VALUES('','$temabeasiswa','$jadwalmulai','$jadwalberakhir','$jadwalpemeriksaan','$jadwalpengumuman','0','$jumlah')");
                if($tambahbeasiswa){
                  echo "Data Beasiswa Berhasil Ditambahkan !!!";
                }else{
                  echo "Data Beasiswa Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!";
                  echo mysqli_error();
                  exit();
                }
            }else if($_GET['page']=="addpenelitian"){
                $username            = $_SESSION['username'];
                $qnope               = mysqli_query($con, "SELECT * from tb_penelitian WHERE username='$username'");
                $judul               = $_POST["judul"];
                $abstrak             = $_POST["abstrak"];
                $kategori            = $_POST["kategori"];
                $filename            = $_FILES["fileToUpload"]["name"];
                $file_basename       = substr($filename, 0, strripos($filename, '.'));
                $file_ext            = substr($filename, strripos($filename, '.'));
                $filesize            = $_FILES["fileToUpload"]["size"];
                $newfilename         = "pene".$username ."-". $file_basename . $file_ext;
                //
                $filename2           = $_FILES["fileToUpload2"]["name"];
                $file_basename2      = substr($filename2, 0, strripos($filename2, '.'));
                $file_ext2           = substr($filename2, strripos($filename2, '.'));
                $filesize2           = $_FILES["fileToUpload2"]["size"];
                $newfilename2        = "ppt".$username ."-". $file_basename2 . $file_ext2;
                $allowed_file_types  = array('.pdf');
                if ((in_array($file_ext,$allowed_file_types)) && (in_array($file_ext2,$allowed_file_types))){
                  if ((move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "berkas/" . $newfilename)) && (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], "berkas/" . $newfilename2))) {
                    if (mysqli_num_rows($qnope)==0){
                        $tambah          = mysqli_query($con, "INSERT INTO tb_penelitian VALUES('$username','','$judul','$abstrak','$newfilename','$newfilename2','$kategori')");
                        if($tambah){
                            echo "Data Penelitian Berhasil Ditambahkan !!!";
                        }else{
                          echo "Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!";
                          echo mysqli_error();
                          exit();
                        }
                    }else{
                        $update    = mysqli_query($con, "UPDATE tb_penelitian SET judul='$judul',abstrak='$abstrak', proposal='$newfilename', ppt='$newfilename2', kategori='$kategori' WHERE username = '$username'");
                        if($update){
                          echo "Data Penelitian Berhasil Di Update !!!";
                        }else{
                          echo "Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!";
                          echo mysqli_error();
                          exit();
                        }
                    }
                  }else{
                    echo "Terjadi Kesalahan Saat Upload Silahkan Hubungi Admin/Developer";
                  }
                }else{
                  echo "File Harus Berupa .PDF";
                }
            }else if($_GET['page']=="addberkas"){
                $username                = $_SESSION['username'];
                $qnope                   = mysqli_query($con, "SELECT * from tb_berkas WHERE username='$username'");
                $fotoDiri                     = $_FILES["fotoDiri"]["name"];
                $file_basename_fotoDiri       = substr($fotoDiri, 0, strripos($fotoDiri, '.'));
                $file_ext_fotoDiri            = substr($fotoDiri, strripos($fotoDiri, '.'));
                $filesize_fotoDiri            = $_FILES["fotoDiri"]["size"];
                $newfotoDiri                  = "diri".$username ."-". $file_basename_fotoDiri . $file_ext_fotoDiri;
                //
                $kartuKeluarga                = $_FILES["kartuKeluarga"]["name"];
                $file_basename_kartuKeluarga  = substr($kartuKeluarga, 0, strripos($kartuKeluarga, '.'));
                $file_ext_kartuKeluarga       = substr($kartuKeluarga, strripos($kartuKeluarga, '.'));
                $filesize_kartuKeluarga       = $_FILES["kartuKeluarga"]["size"];
                $newkartuKeluarga             = "KK".$username ."-". $file_basename_kartuKeluarga . $file_ext_kartuKeluarga;
                //
                $tandaPenduduk                  = $_FILES["tandaPenduduk"]["name"];
                $file_basename_tandaPenduduk    = substr($tandaPenduduk, 0, strripos($tandaPenduduk, '.'));
                $file_ext_tandaPenduduk         = substr($tandaPenduduk, strripos($tandaPenduduk, '.'));
                $filesize_tandaPenduduk         = $_FILES["tandaPenduduk"]["size"];
                $newtandaPenduduk               = "KTP".$username ."-". $file_basename_tandaPenduduk . $file_ext_tandaPenduduk;
                //
                $tandaMahasiswa                 = $_FILES["tandaMahasiswa"]["name"];
                $file_basename_tandaMahasiswa   = substr($tandaMahasiswa, 0, strripos($tandaMahasiswa, '.'));
                $file_ext_tandaMahasiswa        = substr($tandaMahasiswa, strripos($tandaMahasiswa, '.'));
                $filesize_tandaMahasiswa        = $_FILES["tandaMahasiswa"]["size"];
                $newtandaMahasiswa              = "KTM".$username ."-". $file_basename_tandaMahasiswa . $file_ext_tandaMahasiswa;
                //
                $riwayatHidup                   = $_FILES["riwayatHidup"]["name"];
                $file_basename_riwayatHidup     = substr($riwayatHidup, 0, strripos($riwayatHidup, '.'));
                $file_ext_riwayatHidup          = substr($riwayatHidup, strripos($riwayatHidup, '.'));
                $filesize_riwayatHidup          = $_FILES["riwayatHidup"]["size"];
                $newriwayatHidup                = "DRH".$username ."-". $file_basename_riwayatHidup . $file_ext_riwayatHidup;
                //
                $suratPernyataan                = $_FILES["suratPernyataan"]["name"];
                $file_basename_suratPernyataan  = substr($suratPernyataan, 0, strripos($suratPernyataan, '.'));
                $file_ext_suratPernyataan       = substr($suratPernyataan, strripos($suratPernyataan, '.'));
                $filesize_suratPernyataan       = $_FILES["suratPernyataan"]["size"];
                $newsuratPernyataan             = "SP".$username ."-". $file_basename_suratPernyataan . $file_ext_suratPernyataan;
                //
                $suratRekomendasi                = $_FILES["suratRekomendasi"]["name"];
                $file_basename_suratRekomendasi  = substr($suratRekomendasi, 0, strripos($suratRekomendasi, '.'));
                $file_ext_suratRekomendasi       = substr($suratRekomendasi, strripos($suratRekomendasi, '.'));
                $filesize_suratRekomendasi       = $_FILES["suratRekomendasi"]["size"];
                $newsuratRekomendasi             = "SR".$username ."-". $file_basename_suratRekomendasi . $file_ext_suratRekomendasi;
                //
                $aktifKuliah                     = $_FILES["aktifKuliah"]["name"];
                $file_basename_aktifKuliah       = substr($aktifKuliah, 0, strripos($aktifKuliah, '.'));
                $file_ext_aktifKuliah            = substr($aktifKuliah, strripos($aktifKuliah, '.'));
                $filesize_aktifKuliah            = $_FILES["aktifKuliah"]["size"];
                $newaktifKuliah                  = "AK".$username ."-". $file_basename_aktifKuliah . $file_ext_aktifKuliah;
                //
                $nilaiAkhir                      = $_FILES["nilaiAkhir"]["name"];
                $file_basename_nilaiAkhir        = substr($nilaiAkhir, 0, strripos($nilaiAkhir, '.'));
                $file_ext_nilaiAkhir             = substr($nilaiAkhir, strripos($nilaiAkhir, '.'));
                $filesize_nilaiAkhir             = $_FILES["nilaiAkhir"]["size"];
                $newnilaiAkhir                   = "NA".$username ."-". $file_basename_nilaiAkhir . $file_ext_nilaiAkhir;
                //
                $lembarPorto                      = $_FILES["lembarPorto"]["name"];
                $file_basename_lembarPorto        = substr($lembarPorto, 0, strripos($lembarPorto, '.'));
                $file_ext_lembarPorto             = substr($lembarPorto, strripos($lembarPorto, '.'));
                $filesize_lembarPorto             = $_FILES["lembarPorto"]["size"];
                $newlembarPorto                   = "POT".$username ."-". $file_basename_lembarPorto . $file_ext_lembarPorto;
                $allowed_file_types  = array('.pdf','.png','.jpg','.jpeg');
                if ((in_array($file_ext_fotoDiri,$allowed_file_types)) && (in_array($file_ext_kartuKeluarga,$allowed_file_types)) && (in_array($file_ext_tandaPenduduk,$allowed_file_types)) && (in_array($file_ext_tandaMahasiswa,$allowed_file_types)) && (in_array($file_ext_riwayatHidup,$allowed_file_types)) && (in_array($file_ext_suratPernyataan,$allowed_file_types)) && (in_array($file_ext_suratRekomendasi,$allowed_file_types)) && (in_array($file_ext_aktifKuliah,$allowed_file_types)) && (in_array($file_ext_nilaiAkhir,$allowed_file_types)) && (in_array($file_ext_lembarPorto,$allowed_file_types))){
                  if ((move_uploaded_file($_FILES["fotoDiri"]["tmp_name"], "berkas/" . $newfotoDiri)) && (move_uploaded_file($_FILES["kartuKeluarga"]["tmp_name"], "berkas/" . $newkartuKeluarga)) && (move_uploaded_file($_FILES["tandaPenduduk"]["tmp_name"], "berkas/" . $newtandaPenduduk)) && (move_uploaded_file($_FILES["tandaMahasiswa"]["tmp_name"], "berkas/" . $newtandaMahasiswa)) && (move_uploaded_file($_FILES["riwayatHidup"]["tmp_name"], "berkas/" . $newriwayatHidup)) && (move_uploaded_file($_FILES["suratPernyataan"]["tmp_name"], "berkas/" . $newsuratPernyataan)) && (move_uploaded_file($_FILES["suratRekomendasi"]["tmp_name"], "berkas/" . $newsuratRekomendasi)) && (move_uploaded_file($_FILES["aktifKuliah"]["tmp_name"], "berkas/" . $newaktifKuliah)) && (move_uploaded_file($_FILES["nilaiAkhir"]["tmp_name"], "berkas/" . $newnilaiAkhir)) && (move_uploaded_file($_FILES["lembarPorto"]["tmp_name"], "berkas/" . $newlembarPorto))) {
                    if (mysqli_num_rows($qnope)==0){
                        $tambah          = mysqli_query($con, "INSERT INTO tb_berkas VALUES('$username','$newfotoDiri','$newkartuKeluarga','$newtandaPenduduk','$newsuratPernyataan','$newsuratRekomendasi','$newaktifKuliah','$newnilaiAkhir','$newtandaMahasiswa','$newriwayatHidup','$newlembarPorto')");
                        if($tambah){
                            echo "Data Berkas Berhasil Di Tambahkan !!!";
                        }else{
                          echo "Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!";
                          echo mysqli_error();
                          exit();
                        }
                    }else{
                        $update    = mysqli_query($con, "UPDATE tb_berkas SET diri='$newfotoDiri',kk='$newkartuKeluarga', ktp='$newtandaPenduduk', pernyataan='$newsuratPernyataan', rekomendasi='$newsuratRekomendasi', aktifkuliah='$newaktifKuliah', transkirp='$newnilaiAkhir', cv='$newriwayatHidup', portofolio='$newlembarPorto', ktm='$newtandaMahasiswa' WHERE username = '$username'");
                        if($update){
                          echo "Data Berkas Berhasil Di Update !!!";
                        }else{
                          echo "Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!";
                          echo mysqli_error();
                          exit();
                        }
                    }
                  }else{
                    echo "Terjadi Kesalahan Saat Upload Silahkan Hubungi Admin/Developer";
                  }
                }else{
                  echo "File Harus Berupa .PDF / .JPG / .PNG / .JPEG";
                }
            }else if($_GET['page']=="datapesertalolos"){
                $jsonArray =array();
                $x=0;
                $query = mysqli_query ($con, "SELECT tb_peserta.nomorpeserta, tb_peserta.nama, tb_peserta.tempatlahir, tb_peserta.tgllahir, tb_peserta.status, tb_peserta.jk, tb_kampus.namakampus, tb_kampus.namaprodi, tb_berkas.diri FROM tb_peserta INNER JOIN tb_kampus ON tb_peserta.username = tb_kampus.username INNER JOIN tb_berkas ON tb_peserta.username = tb_berkas.username WHERE tb_peserta.status='2'");
                while($row = mysqli_fetch_assoc($query)){
                    $jsonArray['data'][$x]=$row;
                    $x++;
                }
                echo json_encode($jsonArray);
            }else if($_GET['page']=="datapeserta"){
                $jsonArray =array();
                $x=0;
                $query = mysqli_query ($con, "SELECT tb_peserta.nomorpeserta, tb_peserta.nama, tb_peserta.tempatlahir, tb_peserta.tgllahir, tb_peserta.status, tb_peserta.jk, tb_kampus.namakampus, tb_kampus.namaprodi, tb_berkas.diri FROM tb_peserta INNER JOIN tb_kampus ON tb_peserta.username = tb_kampus.username INNER JOIN tb_berkas ON tb_peserta.username = tb_berkas.username");
                while($row = mysqli_fetch_assoc($query)){
                    $jsonArray['data'][$x]=$row;
                    $x++;
                }
                echo json_encode($jsonArray);
            }else if($_GET['page']=="datauser"){
                $jsonArray =array();
                $x=0;
                $query = mysqli_query ($con, "SELECT * FROM tb_user WHERE Level!='Admin'");
                while($row = mysqli_fetch_assoc($query)){
                    $jsonArray['data'][$x]=$row;
                    $jsonArray['data'][$x]['password']= md5($jsonArray['data'][$x]['password']);
                    $x++;
                }
                echo json_encode($jsonArray);
            }else if($_GET['page']=="datalowongan"){
                $jsonArray =array();
                $x=0;
                $query = mysqli_query ($con, "SELECT * FROM tb_lowongan");
                while($row = mysqli_fetch_assoc($query)){
                    $jsonArray['data'][$x]=$row;
                    if($jsonArray['data'][$x]['status']=='0'){
                        $status="Belum Dibuka";
                    }elseif($jsonArray['data'][$x]['status']=='1'){
                        $status="Telah Dibuka";
                    }elseif($jsonArray['data'][$x]['status']=='2'){
                        $status="Telah Berakhir";
                    }
                    $jsonArray['data'][$x]['status']=$status;
                    $x++;
                }
                echo json_encode($jsonArray);
            }else if($_GET['page']=="datakategori"){
                $jsonArray =array();
                $x=0;
                $query = mysqli_query ($con, "SELECT * FROM tb_kategori");
                while($row = mysqli_fetch_assoc($query)){
                    $jsonArray['data'][$x]=$row;
                    $x++;
                }
                echo json_encode($jsonArray);
            }else if($_GET['page']=="datariwayatpendidikan"){
                $jsonArray =array();
                $username         = $_SESSION['username'];
                $x=0;
                $query = mysqli_query ($con, "SELECT * FROM tb_pendidikan WHERE username!='Admin' AND username='$username'");
                while($row = mysqli_fetch_assoc($query)){
                    $jsonArray['data'][$x]=$row;
                    $x++;
                }
                echo json_encode($jsonArray);
            }else if($_GET['page']=="datariwayatorganisasi"){
                $jsonArray =array();
                $username         = $_SESSION['username'];
                $x=0;
                $query = mysqli_query ($con, "SELECT * FROM tb_organisasi WHERE username!='Admin' AND username='$username'");
                while($row = mysqli_fetch_assoc($query)){
                    $jsonArray['data'][$x]=$row;
                    $x++;
                }
                echo json_encode($jsonArray);
            }else if($_GET['page']=="datariwayatprestasi"){
                $jsonArray =array();
                $username         = $_SESSION['username'];
                $x=0;
                $query = mysqli_query ($con, "SELECT * FROM tb_prestasi WHERE username!='Admin' AND username='$username'");
                while($row = mysqli_fetch_assoc($query)){
                    $jsonArray['data'][$x]=$row;
                    $x++;
                }
                echo json_encode($jsonArray);
            }else if($_GET['page']=="addorganisasi"){
                $textnamaorganisasi  = $_POST["textorganisasi"];
                $textbidang          = $_POST["textbidang"];
                $textjabatan         = $_POST["textjabatan"];
                $texttahunmasuk      = $_POST["texttahunmasuk"];
                $texttahunkeluar     = $_POST["texttahunlulus"];
                $username            = $_SESSION['username'];
                $tambah              = mysqli_query($con, "INSERT INTO tb_organisasi VALUES('$username','','$textnamaorganisasi','$textbidang','$textjabatan','$texttahunmasuk','$texttahunkeluar')");
                if($tambah){
                  echo "Data Organisasi Berhasil Ditambahkan !!!";
                }else{
                  echo "Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!";
                  exit();
                }
            }else if($_GET['page']=="registrasi"){
                $username            = $_POST["username"];
                $namalengkap         = $_POST["namalengkap"];
                $password            = $_POST["password"];
                $tambah              = mysqli_query($con, "INSERT INTO tb_user VALUES('$username','$password','$namalengkap','User')");
                if($tambah){
                  echo "Proses Registrasi Telah Berhasil Silahkan Login !!!";
                }else{
                  echo "Gagal Mendaftar Silahkan Hubungi Admin/Developer !!!";
                  exit();
                }
            }else if($_GET['page']=="addprestasi"){
                $username           = $_SESSION['username'];
                $textlomba          = $_POST["textlomba"];
                $texttingkatlomba   = $_POST["texttingkatlomba"];
                $textperingkat      = $_POST["textperingkat"];
                $textbidang         = $_POST["textbidang"];
                $textpenyelenggara  = $_POST["textpenyelenggara"];
                $texttahun          = $_POST["texttahun"];
                $filename           = $_FILES["fileToUpload"]["name"];
                $file_basename      = substr($filename, 0, strripos($filename, '.'));
                $file_ext           = substr($filename, strripos($filename, '.'));
                $filesize           = $_FILES["fileToUpload"]["size"];
                $newfilename        = "pres".$username ."-". $file_basename . $file_ext;
                $allowed_file_types = array('.pdf');
                if (in_array($file_ext,$allowed_file_types)){
                  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "berkas/" . $newfilename)) {
                    $tambah          = mysqli_query($con, "INSERT INTO tb_prestasi VALUES('$username','','$textlomba','$textbidang','$textperingkat','$texttingkatlomba','$textpenyelenggara','$texttahun','$newfilename')");
                    if($tambah){
                      echo "Data Prestasi Berhasil Ditambahkan !!!";
                    }else{
                        echo mysqli_error($con);
                      // echo "Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!";
                    }
                  }else{
                    echo "Terjadi Kesalahan Saat Upload Silahkan Hubungi Admin/Developer";
                  }
                }else{
                  echo "File Harus Berupa .PDF";
                }
            }else if($_GET['page']=="addpendidikan"){
                $username           = $_SESSION['username'];
                $texttingkat        = $_POST["texttingkat"];
                $textinstitusi      = $_POST["textinstitusi"];
                $textjurusan        = $_POST["textjurusan"];
                $textnilai          = $_POST["textnilai"];
                $texttahunmasuk     = $_POST["texttahunmasuk"];
                $texttahunlulus     = $_POST["texttahunlulus"];
                $textnomorijazah    = $_POST["textnomorijazah"];
                $filename           = $_FILES["fileToUpload"]["name"];
                $file_basename      = substr($filename, 0, strripos($filename, '.'));
                $file_ext           = substr($filename, strripos($filename, '.'));
                $filesize           = $_FILES["fileToUpload"]["size"];
                $newfilename        = "pend".$username ."-". $file_basename . $file_ext;
                $allowed_file_types = array('.pdf');
                if (in_array($file_ext,$allowed_file_types)){
                  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "berkas/" . $newfilename)) {
                    $tambah          = mysqli_query($con, "INSERT INTO tb_pendidikan VALUES('$username','','$texttingkat','$textinstitusi','$textjurusan','$textnilai','$texttahunmasuk','$texttahunlulus','$textnomorijazah','$newfilename')");
                    if($tambah){
                      echo "Data Pendidikan Berhasil Ditambahkan !!!";
                    }else{
                        echo mysqli_error($con);
                      // echo "Data Gagal Ditambahkan Silahkan Hubungi Admin/Developer !!!";
                    }
                  }else{
                    echo "Terjadi Kesalahan Saat Upload Silahkan Hubungi Admin/Developer";
                  }
                }else{
                  echo "File Harus Berupa .PDF";
                }
            }else if($_GET['page']=="deleteorganisasi"){
                $id=$_POST['id'];
                $query = mysqli_query ($con, "DELETE FROM tb_organisasi WHERE id_organisasi='$id'");
                if($query){
                    echo "Data Berhasil Dihapus !!!";
                }else{
                    echo "Terjadi Kesalahan !!! Silahkan Hubungi Administrator";
                }
            }else if($_GET['page']=="deleteprestasi"){
                $id=$_POST['id'];
                $query = mysqli_query ($con, "DELETE FROM tb_prestasi WHERE id_prestasi='$id'");
                if($query){
                    echo "Data Berhasil Dihapus !!!";
                }else{
                    echo "Terjadi Kesalahan !!! Silahkan Hubungi Administrator";
                }
            }else if($_GET['page']=="deletependidikan"){
                $id=$_POST['id'];
                $query = mysqli_query ($con, "DELETE FROM tb_pendidikan WHERE id_pendidikan='$id'");
                if($query){
                    echo "Data Berhasil Dihapus !!!";
                }else{
                    echo "Terjadi Kesalahan !!! Silahkan Hubungi Administrator";
                }
            }else if($_GET['page']=="akhiripendaftaran"){
                $username           = $_SESSION['username'];
                $query = mysqli_query ($con, "UPDATE tb_peserta SET status='1' WHERE username='$username'");
                if($query){
                    echo "Anda Berhasil Mengakhiri Pengisian Biodata & Pendaftaran Ini !!!";
                }else{
                    echo "Terjadi Kesalahan !!! Silahkan Hubungi Administrator";
                }
            }
        }
    }
?>