<?php 
	include '../conf/koneksi.php';
	



if (isset($_POST['terima'])) {
    $kode_skdi = $_POST['kode_skdi'];
    $tgl_setuju = date('Y-m-d');

		$ket  = "diterima";


	
$sql = mysqli_query($koneksi,"UPDATE sk_domisili_i set ket='$ket',tgl_setuju='$tgl_setuju' WHERE kode_skdi='$kode_skdi'");	

			echo "<script>alert('Berhasil diterima!');document.location='../domisili.php'</script>";


} 
if (isset($_POST['tolak'])) {
    $kode_skdi = $_POST['kode_skdi'];
    $tgl_setuju = date('Y-m-d');
    
	$ket  = "ditolak";
	
$sql = mysqli_query($koneksi,"UPDATE sk_domisili_i set ket='$ket',tgl_setuju='$tgl_setuju' WHERE kode_skdi ='$kode_skdi'");

			echo "<script>alert('Berhasil ditolak!');document.location='../domisili.php'</script>";
		


} 
 ?>