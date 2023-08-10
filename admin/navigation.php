<?php 
error_reporting(0);
#beranda
if ($_GET['mod']=='beasiswa' && $statuslowongan!='0' && $statuslowongan!='1') {
	include 'beasiswa.php';
}elseif ($_GET['mod']=='timeline') {
	include 'timeline.php';
}elseif ($_GET['mod']=='datapeserta') {
	include 'datapeserta.php';
}elseif ($_GET['mod']=='datauser') {
	include 'datauser.php';
}elseif ($_GET['mod']=='datakategori') {
	include 'datakategori.php';
}elseif ($_GET['mod']=='datalowongan') {
	include 'datalowongan.php';
}elseif ($_GET['mod']=='ubahpassword') {
	include 'ubahpassword.php';
}elseif($statuslowongan=='0' || $statuslowongan=='1'){
	include 'timeline.php';
}else{
	include 'dashboard.php';
}

?>