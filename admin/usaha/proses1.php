<?php 
	include '../conf/koneksi.php';
	



if (isset($_POST['terima'])) {
    $kode_usaha = $_POST['kode_usaha'];
		$persetujuan  = "Disetujui";


	
$sql = mysqli_query($koneksi,"UPDATE sk_usaha set persetujuan='$persetujuan' WHERE kode_usaha='$kode_usaha'");	

			echo "<script>alert('Berhasil Disetujui!');document.location='../usaha.php'</script>";


} 
if (isset($_POST['tolak'])) {
    $kode_usaha = $_POST['kode_usaha'];
	$persetujuan  = "Ditolak";
	
$sql = mysqli_query($koneksi,"UPDATE sk_usaha set persetujuan='$persetujuan' WHERE kode_usaha ='$kode_usaha'");

			echo "<script>alert('Berhasil Ditolak!');document.location='../usaha.php'</script>";
		


} 
 ?>