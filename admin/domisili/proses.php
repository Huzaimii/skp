<?php 
	include '../conf/koneksi.php';

if (isset($_POST['tambah'])) { 
    $id_penduduk = $_POST['id_penduduk'];
    $tgl_permohonan = $_POST['tgl_permohonan'];
      	
	$sql = mysqli_query($koneksi,"INSERT INTO sk_domisili_i SET id_penduduk='$id_penduduk',tgl_permohonan='$tgl_permohonan'");
	header('location: ../domisili.php');
}
		
if (isset($_POST['cancel'])) {
header('location: ../pegawai.php'); 
}
if (isset($_POST['edit'])) {
    
    $kode_skdi = $_POST['kode_skdi'];
    $id_penduduk = $_POST['id_penduduk'];
    $tgl_permohonan = $_POST['tgl_permohonan'];


	
	$sql = mysqli_query($koneksi,"UPDATE sk_domisili_i SET id_penduduk='$id_penduduk',tgl_permohonan='$tgl_permohonan' WHERE kode_skdi='$kode_skdi' ");
	header('location: ../domisili.php');
} 


 ?>