<?php 
error_reporting(0);
#beranda
if ($_GET['mod']=='datadiri' && $status=='0') {
	include 'datadiri.php';
}elseif ($_GET['mod']=='dataorangtua' && $status=='0') {
	include 'dataorangtua.php';
}elseif ($_GET['mod']=='datariwayat' && $status=='0') {
	include 'datariwayat.php';
}elseif ($_GET['mod']=='datapenelitian' && $status=='0') {
	include 'datapenelitian.php';
}elseif ($_GET['mod']=='berkaspersyaratan' && $status=='0') {
	include 'berkaspersyaratan.php';
}elseif($status=='2'){
	include 'lulus.php';
}elseif($status=='3'){
	include 'gugur.php';
}elseif($status=='1'){
	include 'final.php';
}elseif($status=='0'){
	include 'datadiri.php';
}else{
	include 'datadiri.php';
}

?>