<?php 
    include '../koneksi.php';
    $qpeserta    = mysqli_query ($con, "SELECT * FROM tb_peserta ORDER BY nomorpeserta DESC");
    $final = array();
    while($row = mysqli_fetch_assoc($qpeserta)){
        $a=0;
        $username    = $row['username'];
        $qkampus       = mysqli_query ($con, "SELECT * FROM tb_kampus WHERE username='$username'");
        $qorangtua     = mysqli_query ($con, "SELECT * FROM tb_orangtua WHERE username='$username'");
        $qpenelitian   = mysqli_query ($con, "SELECT * FROM tb_penelitian WHERE username='$username'");
        $qberkas       = mysqli_query ($con, "SELECT * FROM tb_berkas WHERE username='$username'");
        $qkategori       = mysqli_query ($con, "SELECT * FROM tb_kategori");

        $rowkampus     = mysqli_fetch_assoc($qkampus);
        $roworangtua   = mysqli_fetch_assoc($qorangtua);
        $rowpenelitian = mysqli_fetch_assoc($qpenelitian);
        $rowberkas     = mysqli_fetch_assoc($qberkas);
        $rowkategori   = mysqli_fetch_assoc($qkategori);

        $nilaipenghasilan       = 0;
        $nilaiipk               = 0;
        $nilaikategori          = 0;
        $nilaiakreditasikampus  = 0;
        $nilaiakreditasiprodi   = 0;

        $akreditasikampus = $rowkampus["akreditasikampus"];
        $akreditasiprodi  = $rowkampus["akreditasiprodi"];
        $ipk              = $rowkampus["ipk"];
        $penghasilanayah  = $roworangtua["penghasilanayah"];
        $penghasilanibu   = $roworangtua["penghasilanibu"];
        $kategori         = $rowkategori["idkategori"];
        $penghasilanortu  = $penghasilanayah + $penghasilanibu;
        //cari nilai profil
        if($penghasilanortu<500000){
            $nilaipenghasilan=5;
        }elseif($penghasilanortu>=500000 && $penghasilanortu<1500000) {
            $nilaipenghasilan=4;
        }elseif($penghasilanortu>=1500000 && $penghasilanortu<2500000) {
            $nilaipenghasilan=3;
        }elseif($penghasilanortu>=2500000 && $penghasilanortu<3500000) {
            $nilaipenghasilan=2;
        }elseif($penghasilanortu>=3500000) {
            $nilaipenghasilan=1;
        }

        if($ipk<3){
            $nilaiipk=1;
        }elseif($ipk>=3 && $ipk<3.5){
            $nilaiipk=2;
        }elseif($ipk>=3.5 && $ipk<=3.9){
            $nilaiipk=3;
        }elseif($ipk==4){
            $nilaiipk=4;
        }

        if($kategori==1){
            $nilaikategori=5;
        }elseif($kategori==2){
            $nilaikategori=4;
        }elseif($kategori==3){
            $nilaikategori=3;
        }elseif($kategori==4){
            $nilaikategori=2;
        }elseif($kategori==5){
            $nilaikategori=1;
        }

        if($akreditasikampus=="Sangat Baik"){
            $nilaiakreditasikampus=3;
        }elseif($akreditasikampus=="Baik"){
            $nilaiakreditasikampus=2;
        }else{
            $nilaiakreditasikampus=1;
        }

        if($akreditasiprodi=="Sangat Baik"){
            $nilaiakreditasiprodi=3;
        }elseif($akreditasiprodi=="Baik"){
            $nilaiakreditasiprodi=2;
        }else{
            $nilaiakreditasiprodi=1;
        }
        //cari nilai gap
        $pragapconvert = array($nilaipenghasilan - 5, $nilaiipk - 4,$nilaikategori - 5,$nilaiakreditasikampus - 3,$nilaiakreditasiprodi - 3);
        //konversi nilai gap
        $gapconvert=array();
        foreach($pragapconvert as $pragap){
            if($pragap == 0){
                $gapconvert[]=5;
            }elseif($pragap == 1){
                $gapconvert[]=4.5;
            }elseif($pragap == 2){
                $gapconvert[]=3.5;
            }elseif($pragap == 3){
                $gapconvert[]=2.5;
            }elseif($pragap == 4){
                $gapconvert[]=1.5;
            }elseif($pragap == -1){
                $gapconvert[]=4;
            }elseif($pragap == -2){
                $gapconvert[]=3;
            }elseif($pragap == -3){
                $gapconvert[]=2;
            }elseif($pragap == -4){
                $gapconvert[]=1;
            }
        }

        //rata-rata dan total nilai berdasar jenis kriteria Core(60%) dan Secondary (40%)
        $core                = (($gapconvert[0]+$gapconvert[1]+$gapconvert[2]) / 3)*0.6;
        $secondary           = (($gapconvert[3]+$gapconvert[4])/2)*0.4;
        $total               = $core+$secondary;
        $final[$username]             = $total;
    }
    arsort($final);
    var_dump($final);
    $jumlah=1;
    $i=0;
    foreach ($final as $key => $v) {
        if ($i == ($jumlah)){
            break;
        }else{
            $updatepeserta    = mysqli_query($con, "UPDATE tb_peserta SET status='2' WHERE username = '$key'");
            if ($updatepeserta) {
                echo "sukses";
            } else {
                mysqli_error($con);
            }
            
        }
        $i++;
    }
?>